"# laravel-with-ElasticSearch--course--sofnet" 

 - Run the Project
run bach elasticsearch (atalho desktop)

for confirm if it is run, 
curl http://localhost:9200/ (or in the browser)


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


