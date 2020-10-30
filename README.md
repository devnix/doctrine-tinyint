# Doctrine TinyInt

An tinyint type for Doctrine MYSQL

## Installation:

~~```composer require devnix/doctrine-tinyint```~~ Not published yet

## Configuration:

```yaml
doctrine:
    dbal:
        types:
            tinyint:  Devnix\Doctrine\DBAL\Types\TinyintType
        mapping_types: # Seems to be necessary if you want migrations to work properly
            tinyint: tinyint
```

## Usage:

This fork of [GollumSF/doctrine-tinyint](https://github.com/GollumSF/doctrine-tinyint) adds support for custom length

```php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table()
 */
class Entity 
{	
    /**
     * @ORM\Column(type="tinyint")
     * @var int
     */
    private $tinyint;

    /**
     * @ORM\Column(type="tinyint", length=3)
     * @var int
     */
    private $tinyintWithCustomLength;

    /**
     * @ORM\Column(type="tinyint", options={"unsigned": true})
     * @var int
     */
    private $tinyintUnsigned;

}
```
