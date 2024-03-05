# DependentWorks
This module displays related publications and volumes.

## Usage
Integrate the module in the `modules` directory of VuFind and activate it by adding `DependentWorks` to `VUFIND_LOCAL_MODULES`.
When adding the module manually make sure to copy and adapt the config file and copy/symlink the theme. 

Add the following line to your detail view:
```php
<?=$this->render('RecordDriver/SolrDefault/dependentworks-core.phtml') ?>
```