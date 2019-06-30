kegerface
=========

A Kegerator Interface!
This is a work in progress. Be gentle.


Questions? Comments? Want to Contribute? email us - kegerface@gmail.com

Local testing with Docker
------------------------
To test this locally with Docker(not on raspberry pi) then run the following commands from inside the folder

To build
`docker build -t kegerface:latest .`

To run
`docker run -d -p 80:80 kegerface:latest`


Note for beers.csv
------------------------
If you have a long beer name, change the final value from "BeerName" to "BeerNameL" and it will format correctly for 2 lines.
