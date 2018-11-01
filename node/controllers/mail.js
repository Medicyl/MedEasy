const sendmail = require('sendmail')();
 
sendmail({
    from: 'devansh.solanki@somaiya.edu',
    to: 'devanshslnk98@gmail.com',
    subject: 'test sendmail',
    html: 'Mail of test sendmail ',
  }, function(err, reply) {
    // console.log(err && err.stack);
    console.dir(reply);
})
