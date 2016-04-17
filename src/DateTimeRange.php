<?php

namespace DateTimeRange;

class DateTimeRange {
    
    protected $range_starts = null;
    protected $range_ends   = null;
    
    
    public function __construct(DateTime $range_starts, DateTime $range_ends)
    {
        $this->range_starts = $range_starts;
        $this->range_ends   = $range_ends;
    }
    
    
    
    public static function create(DateTime $range_starts, DateTime $range_ends)
    {
        return (new DateTimeRange($range_starts, $range_ends));
    }
    
    
    /**
     * checks is given datetime between range including start
     *
     * @param DateTime @dt
     * @return bool
     */
    public function isInRangeIncStart(DateTime $dt)
    {
        return $this->isInRange($dt, true);
    }
    
    /**
     * checks is given datetime between range including end
     *
     * @param DateTime @dt
     * @return bool
     */
    public function isInRangeIncEnd(DateTime $dt)
    {
        return $this->isInRange($dt, false, true);
    }
    
    /**
     * checks is given datetime between range including start and end borders
     *
     * @param DateTime @dt
     * @return bool
     */
    public function isInRangeIncBoth(DateTime $dt)
    {
        return $this->isInRange($dt, true, true);
    }
    
    
    /**
     * checks is given datetime between range
     *
     * @param DateTime @dt
     * @return bool
     */
    public function isInRange(DateTime $dt, $inc_start = false, $inc_end = false)
    {
        $ts_start = $this->range_starts->getTimestamp();
        $ts_end   = $this->range_ends->getTimestamp();
        $ts_to_check = $dt->getTimestamp();
        
        if ($inc_start) $higher_than_start = ($ts_to_check >= $ts_start);
        else            $higher_than_start = ($ts_to_check > $ts_start);
        
        if ($inc_end)   $less_than_end = ($ts_to_check <= $ts_end);
        else            $less_than_end = ($ts_to_check < $ts_end);
        
        
        if (    $higher_than_start
            &&  $less_than_end
        ) {
            return true;
        }
        
        return false;
    }
    
    
}