<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RegistryKeyState
 */
class RegistryKeyState
{
    public function __construct(
        /** A Windows registry hive : HKEYCURRENTCONFIG HKEYCURRENTUSER HKEYLOCALMACHINE/SAM HKEYLOCALMACHINE/Security HKEYLOCALMACHINE/Software HKEYLOCALMACHINE/System HKEY_USERS/.Default. Possible values are: unknown, currentConfig, currentUser, localMachineSam, localMachineSecurity, localMachineSoftware, localMachineSystem, usersDefault. */
        public ?string $hive = null,
        /** Current (i.e. changed) registry key (excludes HIVE). */
        public ?string $key = null,
        /** Previous (i.e. before changed) registry key (excludes HIVE). */
        public ?string $oldKey = null,
        /** Previous (i.e. before changed) registry key value data (contents). */
        public ?string $oldValueData = null,
        /** Previous (i.e. before changed) registry key value name. */
        public ?string $oldValueName = null,
        /** Operation that changed the registry key name and/or value. Possible values are: unknown, create, modify, delete. */
        public ?string $operation = null,
        /** Process ID (PID) of the process that modified the registry key (process details will appear in the alert 'processes' collection). */
        public ?float $processId = null,
        /** Current (i.e. changed) registry key value data (contents). */
        public ?string $valueData = null,
        /** Current (i.e. changed) registry key value name */
        public ?string $valueName = null,
        /** Registry key value type REGBINARY REGDWORD REGDWORDLITTLEENDIAN REGDWORDBIGENDIANREGEXPANDSZ REGLINK REGMULTISZ REGNONE REGQWORD REGQWORDLITTLEENDIAN REG_SZ Possible values are: unknown, binary, dword, dwordLittleEndian, dwordBigEndian, expandSz, link, multiSz, none, qword, qwordlittleEndian, sz. */
        public ?string $valueType = null
    ) {}
}
