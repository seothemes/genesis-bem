# Genesis BEM

Feature plugin that converts Genesis markup to BEM classes.

## Installation

Download and install zip file from master branch.

## Usage

Default classes can be changed with the `genesis_bem_defaults` filter, e.g:

```php
add_filter( 'genesis_bem_defaults', 'custom_bem_classes', 10, 1 );
/**
 * Modify Genesis BEM defaults.
 *
 * @param array $defaults Default pluign values.
 *
 * @return array
 */
function custom_bem_classes( $defaults ) {
    $defaults[ 'site-header' ] = 'app-header';
    
    return $defaults;
}
```
