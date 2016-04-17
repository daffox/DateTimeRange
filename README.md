# DateTimeRange
PHP Class that works with native PHP DateTime class. Includes range between two DateTime objects.

# Example usage with briannesbitt/Carbon package

```php
use Carbon\Carbon;
use daffox\DateTimeRange;

$dt_range_start = Carbon::create(2016, 4, 19);
$dt_range_end   = Carbon::create(2016, 4, 25);
$dt_to_check    = Carbon::create(2016, 4, 20);

$range = DateTimeRange::create($dt_range_start, $dt_range_end);
$is_in_range = $range->isInRange($dt_to_check);
```


# Example usage with native php \DateTime class

```php
use Carbon\Carbon;
use daffox\DateTimeRange;

$dt_range_start = new DateTime('2016-04-19');
$dt_range_end   = new DateTime('2016-04-25');
$dt_to_check    = new DateTime('2016-04-20');

$range = DateTimeRange::create($dt_range_start, $dt_range_end);
$is_in_range = $range->isInRange($dt_to_check);
```
