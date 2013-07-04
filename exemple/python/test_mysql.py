import MySQLdb, pprint
 
uneConnexionBDD = MySQLdb.connect(host   ='locahost',
                                   user   ='superadmin',
                                   passwd ='supercode',
                                   db     ='APPLICATIONS_taxesejour')
leCurseur       = uneConnexionBDD.cursor()
unAuteur        = "'%lia%'"
leCurseur.execute(""" SELECT * FROM taxe_sejour_adresse WHERE nom like %s """ % (unAuteur,))
pprint.pprint(leCurseur.fetchall())
uneConnexionBDD.commit()