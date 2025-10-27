<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RegistryKeyState
 */
class RegistryKeyState
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * A Windows registry hive : HKEYCURRENTCONFIG HKEYCURRENTUSER HKEYLOCALMACHINE/SAM HKEYLOCALMACHINE/Security HKEYLOCALMACHINE/Software HKEYLOCALMACHINE/System HKEY_USERS/.Default. Possible values are: unknown, currentConfig, currentUser, localMachineSam, localMachineSecurity, localMachineSoftware, localMachineSystem, usersDefault.
     * @var RegistryHive|\stdClass|null
     */
    public mixed $hive = null;

    /** Current (i.e. changed) registry key (excludes HIVE). */
    public ?string $key = null;

    /** Previous (i.e. before changed) registry key (excludes HIVE). */
    public ?string $oldKey = null;

    /** Previous (i.e. before changed) registry key value data (contents). */
    public ?string $oldValueData = null;

    /** Previous (i.e. before changed) registry key value name. */
    public ?string $oldValueName = null;

    /** 
     * Operation that changed the registry key name and/or value. Possible values are: unknown, create, modify, delete.
     * @var RegistryOperation|\stdClass|null
     */
    public mixed $operation = null;

    /** Process ID (PID) of the process that modified the registry key (process details will appear in the alert 'processes' collection). */
    public ?float $processId = null;

    /** Current (i.e. changed) registry key value data (contents). */
    public ?string $valueData = null;

    /** Current (i.e. changed) registry key value name */
    public ?string $valueName = null;

    /** 
     * Registry key value type REGBINARY REGDWORD REGDWORDLITTLEENDIAN REGDWORDBIGENDIANREGEXPANDSZ REGLINK REGMULTISZ REGNONE REGQWORD REGQWORDLITTLEENDIAN REG_SZ Possible values are: unknown, binary, dword, dwordLittleEndian, dwordBigEndian, expandSz, link, multiSz, none, qword, qwordlittleEndian, sz.
     * @var RegistryValueType|\stdClass|null
     */
    public mixed $valueType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['hive'])) {
            $this->hive = is_array($data['hive']) ? new RegistryHive($data['hive']) : $data['hive'];
        }
        if (isset($data['key'])) {
            $this->key = $data['key'];
        }
        if (isset($data['oldKey'])) {
            $this->oldKey = $data['oldKey'];
        }
        if (isset($data['oldValueData'])) {
            $this->oldValueData = $data['oldValueData'];
        }
        if (isset($data['oldValueName'])) {
            $this->oldValueName = $data['oldValueName'];
        }
        if (isset($data['operation'])) {
            $this->operation = is_array($data['operation']) ? new RegistryOperation($data['operation']) : $data['operation'];
        }
        if (isset($data['processId'])) {
            $this->processId = $data['processId'];
        }
        if (isset($data['valueData'])) {
            $this->valueData = $data['valueData'];
        }
        if (isset($data['valueName'])) {
            $this->valueName = $data['valueName'];
        }
        if (isset($data['valueType'])) {
            $this->valueType = is_array($data['valueType']) ? new RegistryValueType($data['valueType']) : $data['valueType'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
