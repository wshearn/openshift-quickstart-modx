ModX on OpenShift
===================

This Git repository helps you get up and running quickly w/ a ModX
installation on OpenShift. It defaults to using MySQL, so when creating
the application you'll want to select and install MySQL.

    rhc app create modx php-5.4 mysql-5.5

Running on OpenShift
--------------------

Create an account at http://openshift.redhat.com/

Create a php-5.4 application with MySQL support.

    rhc app create modx php-5.4 mysql-5.5 --from-code=https://github.com/wshearn/openshift-quickstart-modx.git -p $PASS

That's it, you can now checkout your application at:
    http://modx-$yournamespace.rhcloud.com

Default Credentials
-------------------
<table>
<tr><td>URL</td><td>http://modx-$yournamespace.rhcloud.com/manager</td></tr>
<tr><td>Default Admin Username</td><td>admin</td></tr>
<tr><td>Default Admin Password</td><td>openshift_changeme</td></tr>
</table>

License
-----------------
ModX is released under the GPL 2.0
