Jackal CMS
=====

Jackal CMS is a free and open-source content management system (CMS) that is built on the PHP framework Laravel. Jackal CMS is easy to use and flexible, making it a great choice for creating a wide variety of websites and digital content, such as blogs, wikis, and e-commerce websites.

# Features

## Jackal CMS includes a variety of features, such as:

A user-friendly interface that makes it easy to create and manage content without having to know how to code.
A variety of built-in templates, themes, and plugins that make it easy to customize your website.
Support for multiple languages.
A variety of features to help improve the SEO of your website.
Support for user roles and permissions.
A variety of security features.
Benefits of using Jackal CMS

## There are many benefits to using Jackal CMS, including:

Ease of use: Jackal CMS is easy to use, even for users who have no prior experience with web development.
Flexibility: Jackal CMS is flexible and can be used to create a wide variety of websites and digital content.
Features: Jackal CMS includes a variety of features that make it easy to create, manage, and publish digital content.
Security: Jackal CMS can help to improve the security of your website by providing features such as user roles and permissions, and security patches and updates.
Support: Jackal CMS has a large community of users and developers who can provide support and help with troubleshooting.
Getting started with Jackal CMS

## To get started with Jackal CMS, you can follow these steps:

Download the Jackal CMS installation package from the Jackal CMS website.
Install the Jackal CMS installation package on your web server.
Create a database for Jackal CMS.
Configure Jackal CMS.
Start using Jackal CMS to create and manage your website or digital content.
Support

If you need help with Jackal CMS, you can visit the Jackal CMS website or join the Jackal CMS community forum.

## Webserver Configs

### NGINX

```
server {
    listen       80;
    server_name  domain_name.com;
    set          $based  /var/www;
    root         $based/public;
    index        index.php;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ ^/(extensions|themes)/(.+)/assets/(.+)\.(eot|svg|ttf|woff|woff2|png|jpg|gif|css|js)$ {
      root $based;
    }
}

```

# License

Jackal CMS is licensed under the MIT license.

# Contributors

Jackal CMS is developed and maintained by a community of volunteers.

# Credits

Jackal CMS uses a variety of open-source software libraries and components.

