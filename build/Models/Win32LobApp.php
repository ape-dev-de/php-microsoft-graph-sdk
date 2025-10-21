<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobApp
 */
class Win32LobApp
{
    /**
     * Indicates the Windows architecture(s) this app should be installed on. The app will be treated as not applicable for devices with architectures not matching the selected value. When a non-null value is provided for the `allowedArchitectures` property, the value of the `applicableArchitectures` property is set to `none`. Possible values are: `null`, `x86`, `x64`, `arm64`.
     */
    private ?string $allowedArchitectures;

    /**
     */
    private ?string $applicableArchitectures;

    /**
     * The command line to install this app
     */
    private ?string $installCommandLine;

    /**
     * The install experience for this app.
     */
    private ?string $installExperience;

    /**
     * The value for the minimum CPU speed which is required to install this app.
     */
    private ?float $minimumCpuSpeedInMHz;

    /**
     * The value for the minimum free disk space which is required to install this app.
     */
    private ?float $minimumFreeDiskSpaceInMB;

    /**
     * The value for the minimum physical memory which is required to install this app.
     */
    private ?float $minimumMemoryInMB;

    /**
     * The value for the minimum number of processors which is required to install this app.
     */
    private ?float $minimumNumberOfProcessors;

    /**
     * The value for the minimum supported windows release.
     */
    private ?string $minimumSupportedWindowsRelease;

    /**
     * The MSI details if this Win32 app is an MSI app.
     */
    private ?string $msiInformation;

    /**
     * The return codes for post installation behavior.
     */
    private array $returnCodes = [];

    /**
     * The detection and requirement rules for this app.
     */
    private array $rules = [];

    /**
     * The relative path of the setup file in the encrypted Win32LobApp package.
     */
    private ?string $setupFilePath;

    /**
     * Contains properties and inherited properties for Win32 apps.
     */
    private ?string $uninstallCommandLine;


    public function getAllowedArchitectures(): ?string
    {
        return $this->allowedArchitectures;
    }

    public function setAllowedArchitectures(?string $allowedArchitectures): self
    {
        $this->allowedArchitectures = $allowedArchitectures;
        return $this;
    }

    public function getApplicableArchitectures(): ?string
    {
        return $this->applicableArchitectures;
    }

    public function setApplicableArchitectures(?string $applicableArchitectures): self
    {
        $this->applicableArchitectures = $applicableArchitectures;
        return $this;
    }

    public function getInstallCommandLine(): ?string
    {
        return $this->installCommandLine;
    }

    public function setInstallCommandLine(?string $installCommandLine): self
    {
        $this->installCommandLine = $installCommandLine;
        return $this;
    }

    public function getInstallExperience(): ?string
    {
        return $this->installExperience;
    }

    public function setInstallExperience(?string $installExperience): self
    {
        $this->installExperience = $installExperience;
        return $this;
    }

    public function getMinimumCpuSpeedInMHz(): ?float
    {
        return $this->minimumCpuSpeedInMHz;
    }

    public function setMinimumCpuSpeedInMHz(?float $minimumCpuSpeedInMHz): self
    {
        $this->minimumCpuSpeedInMHz = $minimumCpuSpeedInMHz;
        return $this;
    }

    public function getMinimumFreeDiskSpaceInMB(): ?float
    {
        return $this->minimumFreeDiskSpaceInMB;
    }

    public function setMinimumFreeDiskSpaceInMB(?float $minimumFreeDiskSpaceInMB): self
    {
        $this->minimumFreeDiskSpaceInMB = $minimumFreeDiskSpaceInMB;
        return $this;
    }

    public function getMinimumMemoryInMB(): ?float
    {
        return $this->minimumMemoryInMB;
    }

    public function setMinimumMemoryInMB(?float $minimumMemoryInMB): self
    {
        $this->minimumMemoryInMB = $minimumMemoryInMB;
        return $this;
    }

    public function getMinimumNumberOfProcessors(): ?float
    {
        return $this->minimumNumberOfProcessors;
    }

    public function setMinimumNumberOfProcessors(?float $minimumNumberOfProcessors): self
    {
        $this->minimumNumberOfProcessors = $minimumNumberOfProcessors;
        return $this;
    }

    public function getMinimumSupportedWindowsRelease(): ?string
    {
        return $this->minimumSupportedWindowsRelease;
    }

    public function setMinimumSupportedWindowsRelease(?string $minimumSupportedWindowsRelease): self
    {
        $this->minimumSupportedWindowsRelease = $minimumSupportedWindowsRelease;
        return $this;
    }

    public function getMsiInformation(): ?string
    {
        return $this->msiInformation;
    }

    public function setMsiInformation(?string $msiInformation): self
    {
        $this->msiInformation = $msiInformation;
        return $this;
    }

    public function getReturnCodes(): array
    {
        return $this->returnCodes;
    }

    public function setReturnCodes(array $returnCodes): self
    {
        $this->returnCodes = $returnCodes;
        return $this;
    }

    public function getRules(): array
    {
        return $this->rules;
    }

    public function setRules(array $rules): self
    {
        $this->rules = $rules;
        return $this;
    }

    public function getSetupFilePath(): ?string
    {
        return $this->setupFilePath;
    }

    public function setSetupFilePath(?string $setupFilePath): self
    {
        $this->setupFilePath = $setupFilePath;
        return $this;
    }

    public function getUninstallCommandLine(): ?string
    {
        return $this->uninstallCommandLine;
    }

    public function setUninstallCommandLine(?string $uninstallCommandLine): self
    {
        $this->uninstallCommandLine = $uninstallCommandLine;
        return $this;
    }

}
