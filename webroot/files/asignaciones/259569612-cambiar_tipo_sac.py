import MySQLdb
import sys
 
DB_HOST = 'localhost'
DB_USER = 'root'
DB_PASS = 'root'
DB_NAME = 'sacdb'

datos = [DB_HOST, DB_USER, DB_PASS, DB_NAME]
conn = MySQLdb.connect(*datos)
cursor = conn.cursor()

try:
	atencion_id = sys.argv[1]
	atenciontipo_id = sys.argv[2]
except:
	print 'cambiar_tipo_sac.py [atencion_id] [atenciontipo_id]'
	sys.exit(2)

cursor.execute("""SELECT id, atenciontipo_id, nro_atencion FROM atenciones WHERE id = %s""" % (atencion_id,))
objs = cursor.fetchall()
if cursor.rowcount:
	for obj in objs:
		nro_atencion = obj[2]
		current_atenciontipo_id = obj[1]

nro_atencion = nro_atencion.split('-')
cursor.execute("""SELECT id, valor FROM parametros WHERE nombre = 'control_%s'""" % (current_atenciontipo_id,))
param_desde = cursor.fetchone()

cursor.execute("""SELECT id, valor FROM parametros WHERE nombre = 'control_%s'""" % (atenciontipo_id,))
param_hasta = cursor.fetchone()

cursor.execute("""UPDATE parametros SET valor = valor - 1 WHERE id = %s;""" % (param_desde[0]))

cursor.execute("""UPDATE parametros SET valor = valor + 1 WHERE nombre = 'control_%s';""" % (atenciontipo_id,))

nro_atencion_new = '%s-%s-%s' % ("%02d" % (int(atenciontipo_id),), "%03d" % (int(param_hasta[1]) + 1,), nro_atencion[2])

cursor.execute("""UPDATE atenciones SET nro_atencion = '%s', atenciontipo_id = %s WHERE id = %s;""" % (nro_atencion_new, atenciontipo_id, atencion_id))

conn.commit()
conn.close()
