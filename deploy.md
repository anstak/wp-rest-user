# wp-rest-user.php

Update version number in /wp-rest-user.php

> define('PLUGIN_NAME_VERSION', 'x.x.x');

# Git

> git add .
> git commit -m "Release x.x.x"
> git tag x.x.x
> git push
> git push --tag

# SVN

> svn co https://plugins.svn.wordpress.org/wp-rest-user temp
## Copy every file from git repository to temp/trunk
> cp -R ./* temp/trunk/
## Manually Copy files to temp/tags folder for release
## Add new files to SVN
> svn add tags/*.*
> svn add trunk/*.*
## Use SVN to commit new release
> svn ci -m "Release x.x.x"


