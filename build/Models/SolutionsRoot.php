<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SolutionsRoot
 */
class SolutionsRoot
{
    /** 
     * 
     * @var BackupRestoreRoot|\stdClass|null
     */
    public mixed $backupRestore = null;

    /** 
     * 
     * @var BookingBusiness[]
     */
    public array $bookingBusinesses = [];

    /** 
     * 
     * @var BookingCurrency[]
     */
    public array $bookingCurrencies = [];

    /** 
     * 
     * @var VirtualEventsRoot|\stdClass|null
     */
    public mixed $virtualEvents = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['backupRestore'])) {
            $this->backupRestore = is_array($data['backupRestore']) ? new BackupRestoreRoot($data['backupRestore']) : $data['backupRestore'];
        }
        if (isset($data['bookingBusinesses'])) {
            $this->bookingBusinesses = $data['bookingBusinesses'];
        }
        if (isset($data['bookingCurrencies'])) {
            $this->bookingCurrencies = $data['bookingCurrencies'];
        }
        if (isset($data['virtualEvents'])) {
            $this->virtualEvents = is_array($data['virtualEvents']) ? new VirtualEventsRoot($data['virtualEvents']) : $data['virtualEvents'];
        }
    }
}
