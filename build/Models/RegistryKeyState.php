<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RegistryKeyState
 */
class RegistryKeyState
{
    /**
     * A Windows registry hive : HKEYCURRENTCONFIG HKEYCURRENTUSER HKEYLOCALMACHINE/SAM HKEYLOCALMACHINE/Security HKEYLOCALMACHINE/Software HKEYLOCALMACHINE/System HKEY_USERS/.Default. Possible values are: unknown, currentConfig, currentUser, localMachineSam, localMachineSecurity, localMachineSoftware, localMachineSystem, usersDefault.
     */
    private ?string $hive;

    /**
     * Current (i.e. changed) registry key (excludes HIVE).
     */
    private ?string $key;

    /**
     * Previous (i.e. before changed) registry key (excludes HIVE).
     */
    private ?string $oldKey;

    /**
     * Previous (i.e. before changed) registry key value data (contents).
     */
    private ?string $oldValueData;

    /**
     * Previous (i.e. before changed) registry key value name.
     */
    private ?string $oldValueName;

    /**
     * Operation that changed the registry key name and/or value. Possible values are: unknown, create, modify, delete.
     */
    private ?string $operation;

    /**
     * Process ID (PID) of the process that modified the registry key (process details will appear in the alert 'processes' collection).
     */
    private ?float $processId;

    /**
     * Current (i.e. changed) registry key value data (contents).
     */
    private ?string $valueData;

    /**
     * Current (i.e. changed) registry key value name
     */
    private ?string $valueName;

    /**
     * Registry key value type REGBINARY REGDWORD REGDWORDLITTLEENDIAN REGDWORDBIGENDIANREGEXPANDSZ REGLINK REGMULTISZ REGNONE REGQWORD REGQWORDLITTLEENDIAN REG_SZ Possible values are: unknown, binary, dword, dwordLittleEndian, dwordBigEndian, expandSz, link, multiSz, none, qword, qwordlittleEndian, sz.
     */
    private ?string $valueType;

    public function getHive(): ?string
    {
        return $this->hive;
    }

    public function setHive(?string $hive): self
    {
        $this->hive = $hive;
        return $this;
    }

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function setKey(?string $key): self
    {
        $this->key = $key;
        return $this;
    }

    public function getOldKey(): ?string
    {
        return $this->oldKey;
    }

    public function setOldKey(?string $oldKey): self
    {
        $this->oldKey = $oldKey;
        return $this;
    }

    public function getOldValueData(): ?string
    {
        return $this->oldValueData;
    }

    public function setOldValueData(?string $oldValueData): self
    {
        $this->oldValueData = $oldValueData;
        return $this;
    }

    public function getOldValueName(): ?string
    {
        return $this->oldValueName;
    }

    public function setOldValueName(?string $oldValueName): self
    {
        $this->oldValueName = $oldValueName;
        return $this;
    }

    public function getOperation(): ?string
    {
        return $this->operation;
    }

    public function setOperation(?string $operation): self
    {
        $this->operation = $operation;
        return $this;
    }

    public function getProcessId(): ?float
    {
        return $this->processId;
    }

    public function setProcessId(?float $processId): self
    {
        $this->processId = $processId;
        return $this;
    }

    public function getValueData(): ?string
    {
        return $this->valueData;
    }

    public function setValueData(?string $valueData): self
    {
        $this->valueData = $valueData;
        return $this;
    }

    public function getValueName(): ?string
    {
        return $this->valueName;
    }

    public function setValueName(?string $valueName): self
    {
        $this->valueName = $valueName;
        return $this;
    }

    public function getValueType(): ?string
    {
        return $this->valueType;
    }

    public function setValueType(?string $valueType): self
    {
        $this->valueType = $valueType;
        return $this;
    }

}
