### 1. Create importer object
```php
use \Vindi\Importer\Importer;

$importer = new Importer;
$importer->setEntity(Importer::Customer);
$importer->setFile(\SplFileObject('file.csv'));
$importer->setFileMap([
  'name'
  'email'
  'registry_code'
  'code'
  'notes'
]);

$importer->setLogFile(\SplFileObject('file.log'));
```

### 2(a).  Import each file line
```php
foreach($importer->records() as $record) {
  $record->import();  
}
```

### 2(b).  Import all file lines
```php
$importer->importAll();
```
