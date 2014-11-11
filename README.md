CS654A - Assignment 3
Prithvi Sharma

There are 2 VMs created which act as processing servers.
On these 2 VMs, PHP5, Apache2 and Drupal 7 are to be installed.
The installation instructions are trivial. Drupal installs the MySQL server with itself.

*The Drupal folders included in the zip file are to be kept in /etc/ of both processing servers.
*The monitoring server files are to be kept in the /var/www/html/ directory of the load balancer.

*The monitoring server files are included in the zip file and they are being run on the host machine which acts as a load balancer. I have used the php5rp reverse proxy library suggested by the TAs in the problem statement files of which are included in the loadBalancer directory in the zip file.

*The different server configurations listed in the report are to be changed in the /etc/apache2/mods-enables/mpm-prefork.conf on both the processing servers.
In Drupal on the 2 processing servers, several content has been created in which there are several NOOP loops also to increase the computation time as discussed with the TAs.

*The processing servers are running with the IPs 192.168.2.10 and 192.168.2.8 with Drupal being present on 192.168.2.*/drupal7. 
The monitoring server is similarly running on 192.168.2.3/drupal7 which acts as the load balancer and redirects requests. The load balancer redirects half the requests to the first server and the other half to the second server.

*All the changes in the server configuration files and in jMeter test configurations are mentioned in the report and can be directly replicated to the configuration file at the path mentioned above in respective processing servers.

*In the stats directory in the zip file, I have included all the CSV files which are the statistics out of jMeter showing observations about impact of various configuration changes on the performance of the web app.