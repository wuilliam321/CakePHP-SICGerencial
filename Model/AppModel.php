<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {
	public function saveWithAttachments($data, $model) {
		// Sanitize your images before adding them
		$attachments = array();
		if (isset($data['Attachment'][0]['attachment']['tmp_name']) && !empty($data['Attachment'][0]['attachment']['tmp_name'])) {
			foreach ($data['Attachment'] as $i => $attachment) {
				if (is_array($data['Attachment'][$i])) {
					// Force setting the `model` field to this model
					// print_r($_SERVER);die;
					$attachment['model'] = $model;
					$attachment['name'] = preg_replace('/\\.[^.\\s]{3,4}$/', '', $attachment['attachment']['name']);
					$attachment['tmp_name'] = $attachment['attachment']['tmp_name'];
					$attachment['type'] = $attachment['attachment']['type'];
					$attachment['size'] = $attachment['attachment']['size'];
					$attachment['dir'] = 'files/'. strtolower($model) . 's/';

					$attachment['attachment'] = sprintf('%09d', rand(0, 999999999)) . '-' . $attachment['attachment']['name'];

					// Unset the foreign_key if the user tries to specify it
					if (isset($attachment['foreign_key'])) {
						unset($attachment['foreign_key']);
					}

					$attachments[] = $attachment;
				}
			}
		}
		$data['Attachment'] = $attachments;
		if (!isset($attachments[0]['tmp_name']) || empty($attachments[0]['tmp_name'])) {
			unset($data['Attachment']);
		}
		// print_r($data);die;
		// Try to save the data using Model::saveAll()
		if ($this->saveAll($data)) {
			if (isset($attachments[0]['tmp_name'])) {
				foreach ($attachments as $attachment) {
					if (is_uploaded_file($attachment['tmp_name'])) {
						if (!move_uploaded_file($attachment['tmp_name'], WWW_ROOT . 'files/' . strtolower($model) . 's/' . $attachment['attachment'])) {
							return false;
						}
					}
				}
			}
			return true;
		}
		return false;
	}
}
