update d_user_catracas
set imprimir = 1
where matricula in("c140210", "c130183","c150099", "c150271", "c170122")

select * from d_user_catracas where imprimir  = 1

update d_user_catracas
set imprimir = 1
where matricula in("c140210", "c130183","c150099", "c150271", "c170122", "c170101","c160065", "c170077","c150385", "c150386", "c100201", "c110083", "c140180", "c170209", "c140165", "c140283")

SELECT sala, ip FROM `d_salas` where data != "0000-00-00" ORDER BY data

select sala, ip from d_salas where data >= "2018-05-07"

-- Montar lista amarrando filhos aos pais

-- Maternal ao primeiro ano
SELECT nome_pai, nome_mae, GROUP_CONCAT(nome_aluno," - ", matricula, " - ", curso, " - ", serie SEPARATOR "\n") as filhos
from d_user_catracas where curso="MAT." or (curso="EF" and serie="1") group by nome_pai

 --Fundamental 2° ao 5°

 --Fundamental 6° ao 9°
 SELECT nome_pai, nome_mae, GROUP_CONCAT(nome_aluno," - ", matricula, " - ", curso, " - ", serie SEPARATOR "\n") as filhos
 from d_user_catracas
 where curso="EF" AND serie in ("6","7","8","9")
 group by nome_pai

-- Ensino médio
SELECT nome_pai, nome_mae, GROUP_CONCAT(nome_aluno," - ", matricula, " - ", curso, " - ", serie SEPARATOR "\n") as filhos
from d_user_catracas
where curso="EM"
group by nome_pai
