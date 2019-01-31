"# laravel-with-ElasticSearch--course--sofnet" 

 - Run the Project
run .batch elasticsearch ( desktop shortcut)

for confirm if it is run, 
curl http://localhost:9200/ (or in the browser)

use sense server (chrome app)
or 
http://sense.stephane.tech/






 - building the enviroment
download jdk
configure JAVA_HOME in variables of enviroment
download the elastic search
run the elasticsearch.batch




https://www.elastic.co/products/elasticsearch

 - Elastic Search use:
https://lucene.apache.org/core/
Is a search engine full text search (created in 1999)

 - Git Hub use elastic search

 - REST Representational State Transfer ... the method define what do you need to do
get (select data)
post  (insert data)
delete (delete data)
and more

  old structure
GET /clients - list of clients
POST /clients - and send the data of client
POST /clients/100 - and send the data of client
GET POST /clients/100
dont have a rule, convention

 actually structure
clients are resource
GET /clients
POST /clients
PUT /clients/100 + dados
DELETE /clients/100 (exclude client 100)
DELETE /clients/100/vendas/10 (exclude client order 10 of client 100)

 - class - Infra of ElasticSearch
cria um CLUSTER com várias intancias 
trab de forma escalonada e distribuida
varias instancias, mega estrutura de buscas, organizadas num grupo  (CLUSTER)
clusters com varias instancias (comp distribuida, escalonamento)
dentro dos clusters teremos nodes (nós) (NODE MASTER, NODE, NODE)
clusters tem chards (fragmentos)
shard e uma instacia de indice do apache lucene, serve para particionamento, espelhamento
se o shard falhar, tem a replica
not mysql, is json
apache lucene armazena texto, nao sabe o que é json
banco relacional manda texto pro elastic search 

apache lucene gerencia os chards sozinho?

elastic search determina os tipos de dados, administra isso sozinho, mas voce pode alterar se quiser

uma estrutura elastic search pode receber dados de varios lugares, e voce concentrar as buscas de seu sistema, nele

