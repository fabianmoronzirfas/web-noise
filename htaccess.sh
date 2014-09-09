RewriteEngine On

# Map http://http://fmz.pictor.uberspace.de/ to /web-noise.
RewriteRule ^$ /web-noise/ [L]

# Map http://http://fmz.pictor.uberspace.de/x to /web-noise/x unless there is a x in the web root.
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_URI} !^/web-noise/
RewriteRule ^(.*)$  /web-noise/$1

# Add trailing slash to directories without them so DirectoryIndex works.
# This does not expose the internal URL.
RewriteCond %{REQUEST_FILENAME} -d
RewriteCond %{REQUEST_FILENAME} !/$
RewriteRule ^(.*)$  $1/