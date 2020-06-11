# Contao 4 - Stock Bundle
##### This is a basic Contao Bundle for building custom bundles from scratch
extension for contao/core-bundle (version ^4.9)

Contao website:[https://contao.org](https://contao.org) <br>
Official Contao Documentation: [https://docs.contao.org](https://docs.contao.org) <br><br>
How to work with Contao 4 and Troubleshooting: [jodermo.github.io/contao-4-documentation](https://jodermo.github.io/contao-4-documentation/)


<br>

## Add bundle as Git-Repository<br>
add code to \<contao root path\>/composer.json
```json
{
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/jodermo/contao-stock-bundle.git"
        }
    ],
    "require": {
        "petzka/demo-bundle": "dev-master"
    },
    "config": {
        "preferred-install": {
            "petzka/*": "source",
            "*": "dist"
        }
    },
}
```

## Add bundle as local repository <br>
add code to \<contao root path\>/composer.json
```json
{
    "...": "...",
    "repositories": [
        {
            "type": "path",
            "url": "<repository path>/contao-stock-bundle"
        }
    ],
    "require": {
        "...": "...",
        "petzka/demo-bundle": "dev-master"
    },
    "config": {
        "preferred-install": {
            "petzka/*": "source",
            "*": "dist"
        }
    },
}
```
<br>

## Create Custom Bundle

[Download](https://github.com/jodermo/contao-stock-bundle/archive/master.zip) and extract or clone this repository <br>
search and replace following namespaces in all files and file names

| search for          | replace with     |
| ------------------- |:----------------:|
| Moritz Petzka       | Your Name        |
| info@petzka.com     | your email       |
| Petzka              | Vendorname       |
| ContaoStock         | BundleName       |
| petzka              | vendorname       |
| contao-stock-bundle | bundle-name      |






