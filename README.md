# Guidance_Simplepage

This module adds a new page layout called "Simple Page" which can be used by content editors to create CMS pages with complete control over the output.

## Example uses

* /robots.txt - Maintaining individual site robots.txt files from within the CMS
* /google3631056abb807e0a.html - Adding a Google site verification page
* /BingSiteAuth.xml - Bing site authentication

## Content types

When you desire the content-type to be set to something other than "text/html" you can define the content-type via a layout update:

    <reference name="guidance_simplepage.content_type">
        <action method="setContentType"><type>text/plain</type></action>
    </reference>

### Example content types

* `text/plain`
* `text/css`
* `text/html`
* `application/xml`

## Notes

Developed for Magento Enterprise Edition 1.14.2.0.  It is quite basic so it should work for past versions of community and enterprise.  Please report an issue if you experience a problem.