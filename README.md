# Contao 4 - Stock Bundle
##### This is a basic Contao Bundle for building custom bundles from scratch
extension for contao/core-bundle (version ^4.9)

## Search & Replace
[Download](https://github.com/jodermo/contao-stock-bundle/archive/master.zip) and extract or clone project <br> 
`git clone https://github.com/jodermo/contao-stock-bundle.git` <br>
search and replace following namespaces in all files and file names

| search for          | replace with     |
| ------------------- |:----------------:|
| Petzka              | Vendorname       |
| ContaoStock         | BundleName       |
| petzka              | vendorname       |
| contao-stock-bundle | bundle-name      |



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

#### How to work with Contao 4 and Troubleshooting: <br> [jodermo.github.io/contao-4-documentation](https://jodermo.github.io/contao-4-documentation/)



