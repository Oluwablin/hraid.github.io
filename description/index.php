
<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=5, initial-scale=1.0">
       <title>Billing</title>
   </head>
  <body>
      <h1> Task Description</h1>
       <p> 
         The first thing you have to do is to make the execution asynchronous in PHP. To acheive this, you can follow this steps: <br>
         1. Leverage on Queues (Amazon SQS to handle each task).<br>

         2. Make use of Parallel processing to handle the API operation and Database operation at both time(like spatie/async). <br>

         3. To handle the Queues, there will have to be like about 100 background workers to handle the jobs.<br>

         4. For Parallel Processing, you can get the two operations to happen in the same 1.6secs since both would occur simultaneously.<br>
      </p>
      <p>
          Then, in order to achieve such operation of 100,000 users in 4.5 hours, one will have to go higher and tackle the hardware layer by introducing multiple instances and queues. <br>If 10,000users would take an hour, 100,000 users would take 10hours mathematically, so to get half the time execution, it would cost more hardware layer definitely.
      </p>
 </body>
</html>