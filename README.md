# Doctrine TinyInt

An tinyint type for Doctrine MYSQL

## Installation:

~~```composer require devnix/doctrine-tinyint```~~ Not published yet

## Configuration:

```yaml
doctrine:
    dbal:
        types:
            mysql_tinyint:  Devnix\Doctrine\DBAL\Types\TinyintType
```

## Usage:

This fork of [GollumSF/doctrine-tinyint](https://github.com/GollumSF/doctrine-tinyint) adds support for custom length, and doesn't conflict with Doctrine's boolean implementation, which is `tinyint` for MySQL. So we have to use a different type name, in this case `mysql_tinyint`.

```php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table()
 */
class Entity 
{	
    /**
     * @ORM\Column(type="mysql_tinyint")
     * @var int
     */
    private $tinyint;

    /**
     * @ORM\Column(type="mysql_tinyint", length=3)
     * @var int
     */
    private $tinyintWithCustomLength;

    /**
     * @ORM\Column(type="mysql_tinyint", options={"unsigned": true})
     * @var int
     */
    private $tinyintUnsigned;

}
```
