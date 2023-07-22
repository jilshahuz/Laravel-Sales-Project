
# Injection service for sales table from various tables

An injection servise to sales table from lead table and relations table according to the id passed to it. The same must work with any table. Also the traces of source table not given.


## API Reference

#### Get all items in sales table

```http
  /sales/
```

#### Add sales entry with lead id

```http
  /sales/Lead_id='id'
```
#### Add sales entry with relation id

```http
  /sales/Relation_id='id'
```  


## Deployment

To deploy this project run

```bash
  npm run build
```
```bash
  php artisan serve
```

