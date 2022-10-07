# wasteless-cloud

This project leverages various AWS capabilities to create a cloud-hosted proof of concept web app for reducing food waste.

The app relies on two EC2 instances for hosting the public and adminstrative web pages, RDS to connect these to a MySQL database, and S3 buckets to store images to aid user experience.

Clients open the public-facing web page at http://ec2-3-239-0-61.compute-1.amazonaws.com/index.php to, in the case of restaurants, fill out a form detailing any leftover food they will have, at what price they would like to sell it and when and where to pick it up. In the case of customers, they will be able to see a list of available leftover food.

Administrators can open the admin web page at http://ec2-3-238-23-152.compute-1.amazonaws.com/index.php and delete leftover food entries.

If you wish to build this yourself, you will need your own AWS account and will have to set up up the environment variables such as security groups and an AMI, and an RDS MySQL database. The vagrant file will need to be altered to reflect these changes. Following this, you can build the VMs by running 'vagrant up --provider=aws'. 

Extending the capability of this web app is limited only by the AWS tools at your disposal. For example, you could use SNS to send a notification to subscribed users every time the submit button is clicked on the public page.
