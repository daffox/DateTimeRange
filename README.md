# DateTimeRange
PHP Class that works with native PHP DateTime class. Includes range between two DateTime objects.

# Usage examples
## Example usage with briannesbitt/Carbon package

```php
use Carbon\Carbon;
use daffox\DateTimeRange;

$dt_range_start = Carbon::create(2016, 4, 19);
$dt_range_end   = Carbon::create(2016, 4, 25);
$dt_to_check    = Carbon::create(2016, 4, 20);

$range = DateTimeRange::create($dt_range_start, $dt_range_end);

// checks value between range
$is_in_range                  = $range->isInRange($dt_to_check);
// checks value between range: including start and till end
$is_in_range_including_start  = $range->isInRangeIncStart($dt_to_check);
// checks value between range: from start to end (including it)
$is_in_range_including_end    = $range->isInRangeIncEnd($dt_to_check);
// checks value between range: including start and till end (including it)
$is_in_range_including_both   = $range->isInRangeIncBoth($dt_to_check);
```

## Example usage with native php \DateTime class

```php
use daffox\DateTimeRange;

$dt_range_start = new DateTime('2016-04-19');
$dt_range_end   = new DateTime('2016-04-25');
$dt_to_check    = new DateTime('2016-04-20');

$range = DateTimeRange::create($dt_range_start, $dt_range_end);

// checks value between range
$is_in_range                  = $range->isInRange($dt_to_check);
// checks value between range: including start and till end
$is_in_range_including_start  = $range->isInRangeIncStart($dt_to_check);
// checks value between range: from start to end (including it)
$is_in_range_including_end    = $range->isInRangeIncEnd($dt_to_check);
// checks value between range: including start and till end (including it)
$is_in_range_including_both   = $range->isInRangeIncBoth($dt_to_check);

```
