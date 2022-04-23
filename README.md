Friendly Params Wordpress
==========

The plugin renders parameters in friendly URL format. <br>

[Guia em português do Friendly Params Wordpress](https://romulobrasil.com/lab/friendly-params-wordpress/)



## How to use

In the function **fp_var**, you will add your variables.
where will use like this for a variable. 
```
$vars[] = "var_name";
```

and so if it is more than one variable, case like this:<br>
**Example:** /events/year/month
```
$vars = array("year", "month");
```

Following in the function **fp_do_rewrite**, in the line you will change ***page-name*** for your page and ***var_name***, for the variable you added in the previous function.
```
add_rewrite_rule("^page-name/([^/]+)/?$", "index.php?pagename=page-name&var_name=\$matches[1]", 'top');
```

If there is more than one variable, matches are accessed through the array key.<br>
***Example:*** /events/year/month
```
add_rewrite_rule("^events/([^/]+)/([^/]+)/?$", "index.php?pagename=events&year=\$matches[1]&mouth=\$matches[2]", 'top');
```

`Thankful!` <br>
[Rômulo Brasil](https://romulobrasil.com/)