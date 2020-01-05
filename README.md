# SouktelTask-
We will implement a ticket publishing and purchasing application.
We will have two types of users in application: buyer and seller. Users can login and register to
the application. A Seller will be able to see all of the concert he/she created and also create
new ones and update already existing ones. A seller will have the option to publish a concert so
buyers can see it. When a concert is published the seller cannot edit any of its fields anymore or
un-publish it. Seller can only edit the ticket price of a published concert.
Buyers will login to the application and see all published concerts. A buyer can buy any number
of tickets on a concert. A concert has a ticket price on it as one of its fields. This price will be
used when buyers do purchases on application to calculate the total price of the tickets sold.
Each ticket in the application will have a random unique 16-character ID that will be used to
distinguish that ticket.
The seller can access the application and change the ticket price of a concert at any time even
published concerts as pointed out above. Hence, the application needs to track on what price
each ticket was sold on each concert and the order of the purchase operation.
When a buyer purchase tickets an email will be sent to his email address with the tickets
purchased including concert details, ticket random ID and the order details.
When the due date of the concert is passed. The application will automatically delete the
concert from the application through a background job
