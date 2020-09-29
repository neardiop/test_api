#Documentation  
Url Swagger Api /docs  
![alt text](https://raw.githubusercontent.com/neardiop/Encyclopedia_Front/image/swagger.png)     
#URL
All routes  
![alt text](https://raw.githubusercontent.com/neardiop/Encyclopedia_Front/image/all_routes.png)  
/statistique_clients?clients_client_id={id_client}  
![alt text](https://raw.githubusercontent.com/neardiop/Encyclopedia_Front/image/stat_clients.png)  
/statistique_tournees?clients_client_id={id_client}&numeroTournee.libelle={numeroTournee}  
[alt text](https://raw.githubusercontent.com/neardiop/Encyclopedia_Front/image/stat_tournee.png)  
/statistique_client_points?clients.client_id={id_client}  
![alt text](https://raw.githubusercontent.com/neardiop/Encyclopedia_Front/image/stat_clients_points.png)  
/statistique_tournee_points?clients.client_id={id_client}&numeroTournee.libelle={numeroTournee}  
![alt text](https://raw.githubusercontent.com/neardiop/Encyclopedia_Front/image/stat_tournee_points.png)  
/statistique_destinataires?idclient={id_client}&limit={limit}  
![alt text](https://raw.githubusercontent.com/neardiop/Encyclopedia_Front/image/stat_destinataire.png)  
/statistique_tournee_destinataires?idclient={id_client}&num_tournee={num_tournee}&limit={limit}  
	exple:  
		30 for currenlty month  
		60 for previous month  
![alt text](https://raw.githubusercontent.com/neardiop/Encyclopedia_Front/image/stat_destinataire_tournee.png)  
/numero_tournees?client_id={id_client}  
![alt text](https://raw.githubusercontent.com/neardiop/Encyclopedia_Front/image/num_tournee.png)  
/dispatches?idclient={id_client}&dst_nom={dst_nom}&date_livraison={date_livraison} (détails livraison par destinataire)  
![alt text](https://raw.githubusercontent.com/neardiop/Encyclopedia_Front/image/detail.png)  