<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookFunctions;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\AbsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\AccrIntRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\AccrIntMRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\AcosRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\AcoshRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\AcotRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\AcothRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\AmorDegrcRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\AmorLincRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\AndModelRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ArabicRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\AreasRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\AscRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\AsinRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\AsinhRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\AtanRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\Atan2RequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\AtanhRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\AveDevRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\AverageRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\AverageARequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\AverageIfRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\AverageIfsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\BahtTextRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\BesselIRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\BesselJRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\BesselKRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\BesselYRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\BetaDistRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\BetaInvRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\Bin2DecRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\Bin2HexRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\Bin2OctRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\BinomDistRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\BinomDistRangeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\BinomInvRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\BitandRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\BitlshiftRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\BitorRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\BitrshiftRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\BitxorRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\CeilingMathRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\CeilingPreciseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\CharRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ChiSqDistRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ChiSqDistRTRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ChiSqInvRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ChiSqInvRTRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ChooseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\CleanRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\CodeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ColumnsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\CombinRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\CombinaRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ComplexRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ConcatenateRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ConfidenceNormRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ConfidenceTRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ConvertRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\CosRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\CoshRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\CotRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\CothRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\CountARequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\CountBlankRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\CountIfRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\CountIfsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\CoupDayBsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\CoupDaysRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\CoupDaysNcRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\CoupNcdRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\CoupNumRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\CoupPcdRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\CscRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\CschRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\CumIPmtRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\CumPrincRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\DateRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\DatevalueRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\DaverageRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\DayRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\DaysRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\Days360RequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\DbRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\DbcsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\DcountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\DcountARequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\DdbRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\Dec2BinRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\Dec2HexRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\Dec2OctRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\DecimalRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\DegreesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\DeltaRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\DevSqRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\DgetRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\DiscRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\DmaxRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\DminRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\DollarRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\DollarDeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\DollarFrRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\DproductRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\DstDevRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\DstDevPRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\DsumRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\DurationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\DvarRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\DvarPRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\EcmaCeilingRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\EdateRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\EffectRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\EoMonthRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ErfRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ErfPreciseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ErfCRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ErfCPreciseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ErrorTypeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\EvenRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ExactRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ExpRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ExponDistRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\FDistRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\FDistRTRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\FInvRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\FInvRTRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\FactRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\FactDoubleRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\FalseModelRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\FindRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\FindBRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\FisherRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\FisherInvRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\FixedRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\FloorMathRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\FloorPreciseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\FvRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\FvscheduleRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\GammaRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\GammaDistRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\GammaInvRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\GammaLnRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\GammaLnPreciseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\GaussRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\GcdRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\GeoMeanRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\GeStepRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\HarMeanRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\Hex2BinRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\Hex2DecRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\Hex2OctRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\HlookupRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\HourRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\HyperlinkRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\HypGeomDistRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\IfModelRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ImAbsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ImaginaryRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ImArgumentRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ImConjugateRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ImCosRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ImCoshRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ImCotRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ImCscRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ImCschRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ImDivRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ImExpRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ImLnRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ImLog10RequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ImLog2RequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ImPowerRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ImProductRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ImRealRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ImSecRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ImSechRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ImSinRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ImSinhRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ImSqrtRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ImSubRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ImSumRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ImTanRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\IntModelRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\IntRateRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\IpmtRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\IrrRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\IsErrRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\IsErrorRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\IsEvenRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\IsFormulaRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\IsLogicalRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\IsNARequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\IsNonTextRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\IsNumberRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\IsoCeilingRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\IsOddRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\IsoWeekNumRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\IspmtRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\IsrefRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\IsTextRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\KurtRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\LargeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\LcmRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\LeftRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\LeftbRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\LenRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\LenbRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\LnRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\LogRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\Log10RequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\LogNormDistRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\LogNormInvRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\LookupRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\LowerRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\MatchModelRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\MaxRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\MaxARequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\MdurationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\MedianRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\MidRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\MidbRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\MinRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\MinARequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\MinuteRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\MirrRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ModRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\MonthRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\MroundRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\MultiNomialRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\NRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\NaRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\NegBinomDistRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\NetworkDaysRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\NetworkDaysIntlRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\NominalRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\NormDistRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\NormInvRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\NormSDistRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\NormSInvRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\NotRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\NowRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\NperRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\NpvRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\NumberValueRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\Oct2BinRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\Oct2DecRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\Oct2HexRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\OddRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\OddFPriceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\OddFYieldRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\OddLPriceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\OddLYieldRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\OrModelRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\PdurationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\PercentileExcRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\PercentileIncRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\PercentRankExcRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\PercentRankIncRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\PermutRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\PermutationaRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\PhiRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\PiRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\PmtRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\PoissonDistRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\PowerRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\PpmtRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\PriceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\PriceDiscRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\PriceMatRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ProductRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ProperRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\PvRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\QuartileExcRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\QuartileIncRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\QuotientRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\RadiansRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\RandRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\RandBetweenRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\RankAvgRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\RankEqRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\RateRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ReceivedRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ReplaceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ReplaceBRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ReptRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\RightRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\RightbRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\RomanRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\RoundRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\RoundDownRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\RoundUpRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\RowsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\RriRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\SecRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\SechRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\SecondRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\SeriesSumRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\SheetRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\SheetsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\SignRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\SinRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\SinhRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\SkewRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\SkewPRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\SlnRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\SmallRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\SqrtRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\SqrtPiRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\StandardizeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\StDevPRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\StDevSRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\StDevARequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\StDevPARequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\SubstituteRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\SubtotalRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\SumRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\SumIfRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\SumIfsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\SumSqRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\SydRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\TRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\TDistRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\TDist2TRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\TDistRTRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\TInvRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\TInv2TRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\TanRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\TanhRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\TbillEqRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\TbillPriceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\TbillYieldRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\TextRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\TimeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\TimevalueRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\TodayRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\TrimRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\TrimMeanRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\TrueModelRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\TruncRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\TypeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\UnicharRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\UnicodeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\UpperRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\UsdollarRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ValueRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\VarPRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\VarSRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\VarARequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\VarPARequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\VdbRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\VlookupRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\WeekdayRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\WeekNumRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\WeibullDistRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\WorkDayRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\WorkDayIntlRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\XirrRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\XnpvRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\XorModelRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\YearRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\YearFracRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\YieldModelRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\YieldDiscRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\YieldMatRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Functions\ZTestRequestBuilder;

/**
 * Request builder for /drives/{drive-id}/items/{driveItem-id}/workbook/functions
 */
class FunctionsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get functions from drives
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return WorkbookFunctions|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): WorkbookFunctions|null
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to WorkbookFunctions|null
     */
    private function deserializeGet(string $body): WorkbookFunctions|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new WorkbookFunctions($data);
    }
    /**
     * Update the navigation property functions in drives
     * @param WorkbookFunctions $body Request body
     * @return WorkbookFunctions|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(WorkbookFunctions $body): WorkbookFunctions|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to WorkbookFunctions|null
     */
    private function deserializePatch(string $body): WorkbookFunctions|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new WorkbookFunctions($data);
    }
    /**
     * Delete navigation property functions for drives
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null && $ifMatch !== '') {
            $queryParams['If-Match'] = $ifMatch;
        }
        $response = $this->client->delete($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeDelete($responseBody);
    }

    /**
     * Deserialize response to mixed
     */
    private function deserializeDelete(string $body): mixed    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return $data;
    }
    /**
     * Navigate to abs
     *
     * @return AbsRequestBuilder
     */
    public function abs(): AbsRequestBuilder
    {
        return new AbsRequestBuilder($this->client, $this->requestUrl . '/abs');
    }
    /**
     * Navigate to accrInt
     *
     * @return AccrIntRequestBuilder
     */
    public function accrInt(): AccrIntRequestBuilder
    {
        return new AccrIntRequestBuilder($this->client, $this->requestUrl . '/accrInt');
    }
    /**
     * Navigate to accrIntM
     *
     * @return AccrIntMRequestBuilder
     */
    public function accrIntM(): AccrIntMRequestBuilder
    {
        return new AccrIntMRequestBuilder($this->client, $this->requestUrl . '/accrIntM');
    }
    /**
     * Navigate to acos
     *
     * @return AcosRequestBuilder
     */
    public function acos(): AcosRequestBuilder
    {
        return new AcosRequestBuilder($this->client, $this->requestUrl . '/acos');
    }
    /**
     * Navigate to acosh
     *
     * @return AcoshRequestBuilder
     */
    public function acosh(): AcoshRequestBuilder
    {
        return new AcoshRequestBuilder($this->client, $this->requestUrl . '/acosh');
    }
    /**
     * Navigate to acot
     *
     * @return AcotRequestBuilder
     */
    public function acot(): AcotRequestBuilder
    {
        return new AcotRequestBuilder($this->client, $this->requestUrl . '/acot');
    }
    /**
     * Navigate to acoth
     *
     * @return AcothRequestBuilder
     */
    public function acoth(): AcothRequestBuilder
    {
        return new AcothRequestBuilder($this->client, $this->requestUrl . '/acoth');
    }
    /**
     * Navigate to amorDegrc
     *
     * @return AmorDegrcRequestBuilder
     */
    public function amorDegrc(): AmorDegrcRequestBuilder
    {
        return new AmorDegrcRequestBuilder($this->client, $this->requestUrl . '/amorDegrc');
    }
    /**
     * Navigate to amorLinc
     *
     * @return AmorLincRequestBuilder
     */
    public function amorLinc(): AmorLincRequestBuilder
    {
        return new AmorLincRequestBuilder($this->client, $this->requestUrl . '/amorLinc');
    }
    /**
     * Navigate to and
     *
     * @return AndModelRequestBuilder
     */
    public function andModel(): AndModelRequestBuilder
    {
        return new AndModelRequestBuilder($this->client, $this->requestUrl . '/and');
    }
    /**
     * Navigate to arabic
     *
     * @return ArabicRequestBuilder
     */
    public function arabic(): ArabicRequestBuilder
    {
        return new ArabicRequestBuilder($this->client, $this->requestUrl . '/arabic');
    }
    /**
     * Navigate to areas
     *
     * @return AreasRequestBuilder
     */
    public function areas(): AreasRequestBuilder
    {
        return new AreasRequestBuilder($this->client, $this->requestUrl . '/areas');
    }
    /**
     * Navigate to asc
     *
     * @return AscRequestBuilder
     */
    public function asc(): AscRequestBuilder
    {
        return new AscRequestBuilder($this->client, $this->requestUrl . '/asc');
    }
    /**
     * Navigate to asin
     *
     * @return AsinRequestBuilder
     */
    public function asin(): AsinRequestBuilder
    {
        return new AsinRequestBuilder($this->client, $this->requestUrl . '/asin');
    }
    /**
     * Navigate to asinh
     *
     * @return AsinhRequestBuilder
     */
    public function asinh(): AsinhRequestBuilder
    {
        return new AsinhRequestBuilder($this->client, $this->requestUrl . '/asinh');
    }
    /**
     * Navigate to atan
     *
     * @return AtanRequestBuilder
     */
    public function atan(): AtanRequestBuilder
    {
        return new AtanRequestBuilder($this->client, $this->requestUrl . '/atan');
    }
    /**
     * Navigate to atan2
     *
     * @return Atan2RequestBuilder
     */
    public function atan2(): Atan2RequestBuilder
    {
        return new Atan2RequestBuilder($this->client, $this->requestUrl . '/atan2');
    }
    /**
     * Navigate to atanh
     *
     * @return AtanhRequestBuilder
     */
    public function atanh(): AtanhRequestBuilder
    {
        return new AtanhRequestBuilder($this->client, $this->requestUrl . '/atanh');
    }
    /**
     * Navigate to aveDev
     *
     * @return AveDevRequestBuilder
     */
    public function aveDev(): AveDevRequestBuilder
    {
        return new AveDevRequestBuilder($this->client, $this->requestUrl . '/aveDev');
    }
    /**
     * Navigate to average
     *
     * @return AverageRequestBuilder
     */
    public function average(): AverageRequestBuilder
    {
        return new AverageRequestBuilder($this->client, $this->requestUrl . '/average');
    }
    /**
     * Navigate to averageA
     *
     * @return AverageARequestBuilder
     */
    public function averageA(): AverageARequestBuilder
    {
        return new AverageARequestBuilder($this->client, $this->requestUrl . '/averageA');
    }
    /**
     * Navigate to averageIf
     *
     * @return AverageIfRequestBuilder
     */
    public function averageIf(): AverageIfRequestBuilder
    {
        return new AverageIfRequestBuilder($this->client, $this->requestUrl . '/averageIf');
    }
    /**
     * Navigate to averageIfs
     *
     * @return AverageIfsRequestBuilder
     */
    public function averageIfs(): AverageIfsRequestBuilder
    {
        return new AverageIfsRequestBuilder($this->client, $this->requestUrl . '/averageIfs');
    }
    /**
     * Navigate to bahtText
     *
     * @return BahtTextRequestBuilder
     */
    public function bahtText(): BahtTextRequestBuilder
    {
        return new BahtTextRequestBuilder($this->client, $this->requestUrl . '/bahtText');
    }
    /**
     * Navigate to base
     *
     * @return BaseRequestBuilder
     */
    public function base(): BaseRequestBuilder
    {
        return new BaseRequestBuilder($this->client, $this->requestUrl . '/base');
    }
    /**
     * Navigate to besselI
     *
     * @return BesselIRequestBuilder
     */
    public function besselI(): BesselIRequestBuilder
    {
        return new BesselIRequestBuilder($this->client, $this->requestUrl . '/besselI');
    }
    /**
     * Navigate to besselJ
     *
     * @return BesselJRequestBuilder
     */
    public function besselJ(): BesselJRequestBuilder
    {
        return new BesselJRequestBuilder($this->client, $this->requestUrl . '/besselJ');
    }
    /**
     * Navigate to besselK
     *
     * @return BesselKRequestBuilder
     */
    public function besselK(): BesselKRequestBuilder
    {
        return new BesselKRequestBuilder($this->client, $this->requestUrl . '/besselK');
    }
    /**
     * Navigate to besselY
     *
     * @return BesselYRequestBuilder
     */
    public function besselY(): BesselYRequestBuilder
    {
        return new BesselYRequestBuilder($this->client, $this->requestUrl . '/besselY');
    }
    /**
     * Navigate to beta_Dist
     *
     * @return BetaDistRequestBuilder
     */
    public function betaDist(): BetaDistRequestBuilder
    {
        return new BetaDistRequestBuilder($this->client, $this->requestUrl . '/beta_Dist');
    }
    /**
     * Navigate to beta_Inv
     *
     * @return BetaInvRequestBuilder
     */
    public function betaInv(): BetaInvRequestBuilder
    {
        return new BetaInvRequestBuilder($this->client, $this->requestUrl . '/beta_Inv');
    }
    /**
     * Navigate to bin2Dec
     *
     * @return Bin2DecRequestBuilder
     */
    public function bin2Dec(): Bin2DecRequestBuilder
    {
        return new Bin2DecRequestBuilder($this->client, $this->requestUrl . '/bin2Dec');
    }
    /**
     * Navigate to bin2Hex
     *
     * @return Bin2HexRequestBuilder
     */
    public function bin2Hex(): Bin2HexRequestBuilder
    {
        return new Bin2HexRequestBuilder($this->client, $this->requestUrl . '/bin2Hex');
    }
    /**
     * Navigate to bin2Oct
     *
     * @return Bin2OctRequestBuilder
     */
    public function bin2Oct(): Bin2OctRequestBuilder
    {
        return new Bin2OctRequestBuilder($this->client, $this->requestUrl . '/bin2Oct');
    }
    /**
     * Navigate to binom_Dist
     *
     * @return BinomDistRequestBuilder
     */
    public function binomDist(): BinomDistRequestBuilder
    {
        return new BinomDistRequestBuilder($this->client, $this->requestUrl . '/binom_Dist');
    }
    /**
     * Navigate to binom_Dist_Range
     *
     * @return BinomDistRangeRequestBuilder
     */
    public function binomDistRange(): BinomDistRangeRequestBuilder
    {
        return new BinomDistRangeRequestBuilder($this->client, $this->requestUrl . '/binom_Dist_Range');
    }
    /**
     * Navigate to binom_Inv
     *
     * @return BinomInvRequestBuilder
     */
    public function binomInv(): BinomInvRequestBuilder
    {
        return new BinomInvRequestBuilder($this->client, $this->requestUrl . '/binom_Inv');
    }
    /**
     * Navigate to bitand
     *
     * @return BitandRequestBuilder
     */
    public function bitand(): BitandRequestBuilder
    {
        return new BitandRequestBuilder($this->client, $this->requestUrl . '/bitand');
    }
    /**
     * Navigate to bitlshift
     *
     * @return BitlshiftRequestBuilder
     */
    public function bitlshift(): BitlshiftRequestBuilder
    {
        return new BitlshiftRequestBuilder($this->client, $this->requestUrl . '/bitlshift');
    }
    /**
     * Navigate to bitor
     *
     * @return BitorRequestBuilder
     */
    public function bitor(): BitorRequestBuilder
    {
        return new BitorRequestBuilder($this->client, $this->requestUrl . '/bitor');
    }
    /**
     * Navigate to bitrshift
     *
     * @return BitrshiftRequestBuilder
     */
    public function bitrshift(): BitrshiftRequestBuilder
    {
        return new BitrshiftRequestBuilder($this->client, $this->requestUrl . '/bitrshift');
    }
    /**
     * Navigate to bitxor
     *
     * @return BitxorRequestBuilder
     */
    public function bitxor(): BitxorRequestBuilder
    {
        return new BitxorRequestBuilder($this->client, $this->requestUrl . '/bitxor');
    }
    /**
     * Navigate to ceiling_Math
     *
     * @return CeilingMathRequestBuilder
     */
    public function ceilingMath(): CeilingMathRequestBuilder
    {
        return new CeilingMathRequestBuilder($this->client, $this->requestUrl . '/ceiling_Math');
    }
    /**
     * Navigate to ceiling_Precise
     *
     * @return CeilingPreciseRequestBuilder
     */
    public function ceilingPrecise(): CeilingPreciseRequestBuilder
    {
        return new CeilingPreciseRequestBuilder($this->client, $this->requestUrl . '/ceiling_Precise');
    }
    /**
     * Navigate to char
     *
     * @return CharRequestBuilder
     */
    public function char(): CharRequestBuilder
    {
        return new CharRequestBuilder($this->client, $this->requestUrl . '/char');
    }
    /**
     * Navigate to chiSq_Dist
     *
     * @return ChiSqDistRequestBuilder
     */
    public function chiSqDist(): ChiSqDistRequestBuilder
    {
        return new ChiSqDistRequestBuilder($this->client, $this->requestUrl . '/chiSq_Dist');
    }
    /**
     * Navigate to chiSq_Dist_RT
     *
     * @return ChiSqDistRTRequestBuilder
     */
    public function chiSqDistRT(): ChiSqDistRTRequestBuilder
    {
        return new ChiSqDistRTRequestBuilder($this->client, $this->requestUrl . '/chiSq_Dist_RT');
    }
    /**
     * Navigate to chiSq_Inv
     *
     * @return ChiSqInvRequestBuilder
     */
    public function chiSqInv(): ChiSqInvRequestBuilder
    {
        return new ChiSqInvRequestBuilder($this->client, $this->requestUrl . '/chiSq_Inv');
    }
    /**
     * Navigate to chiSq_Inv_RT
     *
     * @return ChiSqInvRTRequestBuilder
     */
    public function chiSqInvRT(): ChiSqInvRTRequestBuilder
    {
        return new ChiSqInvRTRequestBuilder($this->client, $this->requestUrl . '/chiSq_Inv_RT');
    }
    /**
     * Navigate to choose
     *
     * @return ChooseRequestBuilder
     */
    public function choose(): ChooseRequestBuilder
    {
        return new ChooseRequestBuilder($this->client, $this->requestUrl . '/choose');
    }
    /**
     * Navigate to clean
     *
     * @return CleanRequestBuilder
     */
    public function clean(): CleanRequestBuilder
    {
        return new CleanRequestBuilder($this->client, $this->requestUrl . '/clean');
    }
    /**
     * Navigate to code
     *
     * @return CodeRequestBuilder
     */
    public function code(): CodeRequestBuilder
    {
        return new CodeRequestBuilder($this->client, $this->requestUrl . '/code');
    }
    /**
     * Navigate to columns
     *
     * @return ColumnsRequestBuilder
     */
    public function columns(): ColumnsRequestBuilder
    {
        return new ColumnsRequestBuilder($this->client, $this->requestUrl . '/columns');
    }
    /**
     * Navigate to combin
     *
     * @return CombinRequestBuilder
     */
    public function combin(): CombinRequestBuilder
    {
        return new CombinRequestBuilder($this->client, $this->requestUrl . '/combin');
    }
    /**
     * Navigate to combina
     *
     * @return CombinaRequestBuilder
     */
    public function combina(): CombinaRequestBuilder
    {
        return new CombinaRequestBuilder($this->client, $this->requestUrl . '/combina');
    }
    /**
     * Navigate to complex
     *
     * @return ComplexRequestBuilder
     */
    public function complex(): ComplexRequestBuilder
    {
        return new ComplexRequestBuilder($this->client, $this->requestUrl . '/complex');
    }
    /**
     * Navigate to concatenate
     *
     * @return ConcatenateRequestBuilder
     */
    public function concatenate(): ConcatenateRequestBuilder
    {
        return new ConcatenateRequestBuilder($this->client, $this->requestUrl . '/concatenate');
    }
    /**
     * Navigate to confidence_Norm
     *
     * @return ConfidenceNormRequestBuilder
     */
    public function confidenceNorm(): ConfidenceNormRequestBuilder
    {
        return new ConfidenceNormRequestBuilder($this->client, $this->requestUrl . '/confidence_Norm');
    }
    /**
     * Navigate to confidence_T
     *
     * @return ConfidenceTRequestBuilder
     */
    public function confidenceT(): ConfidenceTRequestBuilder
    {
        return new ConfidenceTRequestBuilder($this->client, $this->requestUrl . '/confidence_T');
    }
    /**
     * Navigate to convert
     *
     * @return ConvertRequestBuilder
     */
    public function convert(): ConvertRequestBuilder
    {
        return new ConvertRequestBuilder($this->client, $this->requestUrl . '/convert');
    }
    /**
     * Navigate to cos
     *
     * @return CosRequestBuilder
     */
    public function cos(): CosRequestBuilder
    {
        return new CosRequestBuilder($this->client, $this->requestUrl . '/cos');
    }
    /**
     * Navigate to cosh
     *
     * @return CoshRequestBuilder
     */
    public function cosh(): CoshRequestBuilder
    {
        return new CoshRequestBuilder($this->client, $this->requestUrl . '/cosh');
    }
    /**
     * Navigate to cot
     *
     * @return CotRequestBuilder
     */
    public function cot(): CotRequestBuilder
    {
        return new CotRequestBuilder($this->client, $this->requestUrl . '/cot');
    }
    /**
     * Navigate to coth
     *
     * @return CothRequestBuilder
     */
    public function coth(): CothRequestBuilder
    {
        return new CothRequestBuilder($this->client, $this->requestUrl . '/coth');
    }
    /**
     * Navigate to count
     *
     * @return CountRequestBuilder
     */
    public function count(): CountRequestBuilder
    {
        return new CountRequestBuilder($this->client, $this->requestUrl . '/count');
    }
    /**
     * Navigate to countA
     *
     * @return CountARequestBuilder
     */
    public function countA(): CountARequestBuilder
    {
        return new CountARequestBuilder($this->client, $this->requestUrl . '/countA');
    }
    /**
     * Navigate to countBlank
     *
     * @return CountBlankRequestBuilder
     */
    public function countBlank(): CountBlankRequestBuilder
    {
        return new CountBlankRequestBuilder($this->client, $this->requestUrl . '/countBlank');
    }
    /**
     * Navigate to countIf
     *
     * @return CountIfRequestBuilder
     */
    public function countIf(): CountIfRequestBuilder
    {
        return new CountIfRequestBuilder($this->client, $this->requestUrl . '/countIf');
    }
    /**
     * Navigate to countIfs
     *
     * @return CountIfsRequestBuilder
     */
    public function countIfs(): CountIfsRequestBuilder
    {
        return new CountIfsRequestBuilder($this->client, $this->requestUrl . '/countIfs');
    }
    /**
     * Navigate to coupDayBs
     *
     * @return CoupDayBsRequestBuilder
     */
    public function coupDayBs(): CoupDayBsRequestBuilder
    {
        return new CoupDayBsRequestBuilder($this->client, $this->requestUrl . '/coupDayBs');
    }
    /**
     * Navigate to coupDays
     *
     * @return CoupDaysRequestBuilder
     */
    public function coupDays(): CoupDaysRequestBuilder
    {
        return new CoupDaysRequestBuilder($this->client, $this->requestUrl . '/coupDays');
    }
    /**
     * Navigate to coupDaysNc
     *
     * @return CoupDaysNcRequestBuilder
     */
    public function coupDaysNc(): CoupDaysNcRequestBuilder
    {
        return new CoupDaysNcRequestBuilder($this->client, $this->requestUrl . '/coupDaysNc');
    }
    /**
     * Navigate to coupNcd
     *
     * @return CoupNcdRequestBuilder
     */
    public function coupNcd(): CoupNcdRequestBuilder
    {
        return new CoupNcdRequestBuilder($this->client, $this->requestUrl . '/coupNcd');
    }
    /**
     * Navigate to coupNum
     *
     * @return CoupNumRequestBuilder
     */
    public function coupNum(): CoupNumRequestBuilder
    {
        return new CoupNumRequestBuilder($this->client, $this->requestUrl . '/coupNum');
    }
    /**
     * Navigate to coupPcd
     *
     * @return CoupPcdRequestBuilder
     */
    public function coupPcd(): CoupPcdRequestBuilder
    {
        return new CoupPcdRequestBuilder($this->client, $this->requestUrl . '/coupPcd');
    }
    /**
     * Navigate to csc
     *
     * @return CscRequestBuilder
     */
    public function csc(): CscRequestBuilder
    {
        return new CscRequestBuilder($this->client, $this->requestUrl . '/csc');
    }
    /**
     * Navigate to csch
     *
     * @return CschRequestBuilder
     */
    public function csch(): CschRequestBuilder
    {
        return new CschRequestBuilder($this->client, $this->requestUrl . '/csch');
    }
    /**
     * Navigate to cumIPmt
     *
     * @return CumIPmtRequestBuilder
     */
    public function cumIPmt(): CumIPmtRequestBuilder
    {
        return new CumIPmtRequestBuilder($this->client, $this->requestUrl . '/cumIPmt');
    }
    /**
     * Navigate to cumPrinc
     *
     * @return CumPrincRequestBuilder
     */
    public function cumPrinc(): CumPrincRequestBuilder
    {
        return new CumPrincRequestBuilder($this->client, $this->requestUrl . '/cumPrinc');
    }
    /**
     * Navigate to date
     *
     * @return DateRequestBuilder
     */
    public function date(): DateRequestBuilder
    {
        return new DateRequestBuilder($this->client, $this->requestUrl . '/date');
    }
    /**
     * Navigate to datevalue
     *
     * @return DatevalueRequestBuilder
     */
    public function datevalue(): DatevalueRequestBuilder
    {
        return new DatevalueRequestBuilder($this->client, $this->requestUrl . '/datevalue');
    }
    /**
     * Navigate to daverage
     *
     * @return DaverageRequestBuilder
     */
    public function daverage(): DaverageRequestBuilder
    {
        return new DaverageRequestBuilder($this->client, $this->requestUrl . '/daverage');
    }
    /**
     * Navigate to day
     *
     * @return DayRequestBuilder
     */
    public function day(): DayRequestBuilder
    {
        return new DayRequestBuilder($this->client, $this->requestUrl . '/day');
    }
    /**
     * Navigate to days
     *
     * @return DaysRequestBuilder
     */
    public function days(): DaysRequestBuilder
    {
        return new DaysRequestBuilder($this->client, $this->requestUrl . '/days');
    }
    /**
     * Navigate to days360
     *
     * @return Days360RequestBuilder
     */
    public function days360(): Days360RequestBuilder
    {
        return new Days360RequestBuilder($this->client, $this->requestUrl . '/days360');
    }
    /**
     * Navigate to db
     *
     * @return DbRequestBuilder
     */
    public function db(): DbRequestBuilder
    {
        return new DbRequestBuilder($this->client, $this->requestUrl . '/db');
    }
    /**
     * Navigate to dbcs
     *
     * @return DbcsRequestBuilder
     */
    public function dbcs(): DbcsRequestBuilder
    {
        return new DbcsRequestBuilder($this->client, $this->requestUrl . '/dbcs');
    }
    /**
     * Navigate to dcount
     *
     * @return DcountRequestBuilder
     */
    public function dcount(): DcountRequestBuilder
    {
        return new DcountRequestBuilder($this->client, $this->requestUrl . '/dcount');
    }
    /**
     * Navigate to dcountA
     *
     * @return DcountARequestBuilder
     */
    public function dcountA(): DcountARequestBuilder
    {
        return new DcountARequestBuilder($this->client, $this->requestUrl . '/dcountA');
    }
    /**
     * Navigate to ddb
     *
     * @return DdbRequestBuilder
     */
    public function ddb(): DdbRequestBuilder
    {
        return new DdbRequestBuilder($this->client, $this->requestUrl . '/ddb');
    }
    /**
     * Navigate to dec2Bin
     *
     * @return Dec2BinRequestBuilder
     */
    public function dec2Bin(): Dec2BinRequestBuilder
    {
        return new Dec2BinRequestBuilder($this->client, $this->requestUrl . '/dec2Bin');
    }
    /**
     * Navigate to dec2Hex
     *
     * @return Dec2HexRequestBuilder
     */
    public function dec2Hex(): Dec2HexRequestBuilder
    {
        return new Dec2HexRequestBuilder($this->client, $this->requestUrl . '/dec2Hex');
    }
    /**
     * Navigate to dec2Oct
     *
     * @return Dec2OctRequestBuilder
     */
    public function dec2Oct(): Dec2OctRequestBuilder
    {
        return new Dec2OctRequestBuilder($this->client, $this->requestUrl . '/dec2Oct');
    }
    /**
     * Navigate to decimal
     *
     * @return DecimalRequestBuilder
     */
    public function decimal(): DecimalRequestBuilder
    {
        return new DecimalRequestBuilder($this->client, $this->requestUrl . '/decimal');
    }
    /**
     * Navigate to degrees
     *
     * @return DegreesRequestBuilder
     */
    public function degrees(): DegreesRequestBuilder
    {
        return new DegreesRequestBuilder($this->client, $this->requestUrl . '/degrees');
    }
    /**
     * Navigate to delta
     *
     * @return DeltaRequestBuilder
     */
    public function delta(): DeltaRequestBuilder
    {
        return new DeltaRequestBuilder($this->client, $this->requestUrl . '/delta');
    }
    /**
     * Navigate to devSq
     *
     * @return DevSqRequestBuilder
     */
    public function devSq(): DevSqRequestBuilder
    {
        return new DevSqRequestBuilder($this->client, $this->requestUrl . '/devSq');
    }
    /**
     * Navigate to dget
     *
     * @return DgetRequestBuilder
     */
    public function dget(): DgetRequestBuilder
    {
        return new DgetRequestBuilder($this->client, $this->requestUrl . '/dget');
    }
    /**
     * Navigate to disc
     *
     * @return DiscRequestBuilder
     */
    public function disc(): DiscRequestBuilder
    {
        return new DiscRequestBuilder($this->client, $this->requestUrl . '/disc');
    }
    /**
     * Navigate to dmax
     *
     * @return DmaxRequestBuilder
     */
    public function dmax(): DmaxRequestBuilder
    {
        return new DmaxRequestBuilder($this->client, $this->requestUrl . '/dmax');
    }
    /**
     * Navigate to dmin
     *
     * @return DminRequestBuilder
     */
    public function dmin(): DminRequestBuilder
    {
        return new DminRequestBuilder($this->client, $this->requestUrl . '/dmin');
    }
    /**
     * Navigate to dollar
     *
     * @return DollarRequestBuilder
     */
    public function dollar(): DollarRequestBuilder
    {
        return new DollarRequestBuilder($this->client, $this->requestUrl . '/dollar');
    }
    /**
     * Navigate to dollarDe
     *
     * @return DollarDeRequestBuilder
     */
    public function dollarDe(): DollarDeRequestBuilder
    {
        return new DollarDeRequestBuilder($this->client, $this->requestUrl . '/dollarDe');
    }
    /**
     * Navigate to dollarFr
     *
     * @return DollarFrRequestBuilder
     */
    public function dollarFr(): DollarFrRequestBuilder
    {
        return new DollarFrRequestBuilder($this->client, $this->requestUrl . '/dollarFr');
    }
    /**
     * Navigate to dproduct
     *
     * @return DproductRequestBuilder
     */
    public function dproduct(): DproductRequestBuilder
    {
        return new DproductRequestBuilder($this->client, $this->requestUrl . '/dproduct');
    }
    /**
     * Navigate to dstDev
     *
     * @return DstDevRequestBuilder
     */
    public function dstDev(): DstDevRequestBuilder
    {
        return new DstDevRequestBuilder($this->client, $this->requestUrl . '/dstDev');
    }
    /**
     * Navigate to dstDevP
     *
     * @return DstDevPRequestBuilder
     */
    public function dstDevP(): DstDevPRequestBuilder
    {
        return new DstDevPRequestBuilder($this->client, $this->requestUrl . '/dstDevP');
    }
    /**
     * Navigate to dsum
     *
     * @return DsumRequestBuilder
     */
    public function dsum(): DsumRequestBuilder
    {
        return new DsumRequestBuilder($this->client, $this->requestUrl . '/dsum');
    }
    /**
     * Navigate to duration
     *
     * @return DurationRequestBuilder
     */
    public function duration(): DurationRequestBuilder
    {
        return new DurationRequestBuilder($this->client, $this->requestUrl . '/duration');
    }
    /**
     * Navigate to dvar
     *
     * @return DvarRequestBuilder
     */
    public function dvar(): DvarRequestBuilder
    {
        return new DvarRequestBuilder($this->client, $this->requestUrl . '/dvar');
    }
    /**
     * Navigate to dvarP
     *
     * @return DvarPRequestBuilder
     */
    public function dvarP(): DvarPRequestBuilder
    {
        return new DvarPRequestBuilder($this->client, $this->requestUrl . '/dvarP');
    }
    /**
     * Navigate to ecma_Ceiling
     *
     * @return EcmaCeilingRequestBuilder
     */
    public function ecmaCeiling(): EcmaCeilingRequestBuilder
    {
        return new EcmaCeilingRequestBuilder($this->client, $this->requestUrl . '/ecma_Ceiling');
    }
    /**
     * Navigate to edate
     *
     * @return EdateRequestBuilder
     */
    public function edate(): EdateRequestBuilder
    {
        return new EdateRequestBuilder($this->client, $this->requestUrl . '/edate');
    }
    /**
     * Navigate to effect
     *
     * @return EffectRequestBuilder
     */
    public function effect(): EffectRequestBuilder
    {
        return new EffectRequestBuilder($this->client, $this->requestUrl . '/effect');
    }
    /**
     * Navigate to eoMonth
     *
     * @return EoMonthRequestBuilder
     */
    public function eoMonth(): EoMonthRequestBuilder
    {
        return new EoMonthRequestBuilder($this->client, $this->requestUrl . '/eoMonth');
    }
    /**
     * Navigate to erf
     *
     * @return ErfRequestBuilder
     */
    public function erf(): ErfRequestBuilder
    {
        return new ErfRequestBuilder($this->client, $this->requestUrl . '/erf');
    }
    /**
     * Navigate to erf_Precise
     *
     * @return ErfPreciseRequestBuilder
     */
    public function erfPrecise(): ErfPreciseRequestBuilder
    {
        return new ErfPreciseRequestBuilder($this->client, $this->requestUrl . '/erf_Precise');
    }
    /**
     * Navigate to erfC
     *
     * @return ErfCRequestBuilder
     */
    public function erfC(): ErfCRequestBuilder
    {
        return new ErfCRequestBuilder($this->client, $this->requestUrl . '/erfC');
    }
    /**
     * Navigate to erfC_Precise
     *
     * @return ErfCPreciseRequestBuilder
     */
    public function erfCPrecise(): ErfCPreciseRequestBuilder
    {
        return new ErfCPreciseRequestBuilder($this->client, $this->requestUrl . '/erfC_Precise');
    }
    /**
     * Navigate to error_Type
     *
     * @return ErrorTypeRequestBuilder
     */
    public function errorType(): ErrorTypeRequestBuilder
    {
        return new ErrorTypeRequestBuilder($this->client, $this->requestUrl . '/error_Type');
    }
    /**
     * Navigate to even
     *
     * @return EvenRequestBuilder
     */
    public function even(): EvenRequestBuilder
    {
        return new EvenRequestBuilder($this->client, $this->requestUrl . '/even');
    }
    /**
     * Navigate to exact
     *
     * @return ExactRequestBuilder
     */
    public function exact(): ExactRequestBuilder
    {
        return new ExactRequestBuilder($this->client, $this->requestUrl . '/exact');
    }
    /**
     * Navigate to exp
     *
     * @return ExpRequestBuilder
     */
    public function exp(): ExpRequestBuilder
    {
        return new ExpRequestBuilder($this->client, $this->requestUrl . '/exp');
    }
    /**
     * Navigate to expon_Dist
     *
     * @return ExponDistRequestBuilder
     */
    public function exponDist(): ExponDistRequestBuilder
    {
        return new ExponDistRequestBuilder($this->client, $this->requestUrl . '/expon_Dist');
    }
    /**
     * Navigate to f_Dist
     *
     * @return FDistRequestBuilder
     */
    public function fDist(): FDistRequestBuilder
    {
        return new FDistRequestBuilder($this->client, $this->requestUrl . '/f_Dist');
    }
    /**
     * Navigate to f_Dist_RT
     *
     * @return FDistRTRequestBuilder
     */
    public function fDistRT(): FDistRTRequestBuilder
    {
        return new FDistRTRequestBuilder($this->client, $this->requestUrl . '/f_Dist_RT');
    }
    /**
     * Navigate to f_Inv
     *
     * @return FInvRequestBuilder
     */
    public function fInv(): FInvRequestBuilder
    {
        return new FInvRequestBuilder($this->client, $this->requestUrl . '/f_Inv');
    }
    /**
     * Navigate to f_Inv_RT
     *
     * @return FInvRTRequestBuilder
     */
    public function fInvRT(): FInvRTRequestBuilder
    {
        return new FInvRTRequestBuilder($this->client, $this->requestUrl . '/f_Inv_RT');
    }
    /**
     * Navigate to fact
     *
     * @return FactRequestBuilder
     */
    public function fact(): FactRequestBuilder
    {
        return new FactRequestBuilder($this->client, $this->requestUrl . '/fact');
    }
    /**
     * Navigate to factDouble
     *
     * @return FactDoubleRequestBuilder
     */
    public function factDouble(): FactDoubleRequestBuilder
    {
        return new FactDoubleRequestBuilder($this->client, $this->requestUrl . '/factDouble');
    }
    /**
     * Navigate to false
     *
     * @return FalseModelRequestBuilder
     */
    public function falseModel(): FalseModelRequestBuilder
    {
        return new FalseModelRequestBuilder($this->client, $this->requestUrl . '/false');
    }
    /**
     * Navigate to find
     *
     * @return FindRequestBuilder
     */
    public function find(): FindRequestBuilder
    {
        return new FindRequestBuilder($this->client, $this->requestUrl . '/find');
    }
    /**
     * Navigate to findB
     *
     * @return FindBRequestBuilder
     */
    public function findB(): FindBRequestBuilder
    {
        return new FindBRequestBuilder($this->client, $this->requestUrl . '/findB');
    }
    /**
     * Navigate to fisher
     *
     * @return FisherRequestBuilder
     */
    public function fisher(): FisherRequestBuilder
    {
        return new FisherRequestBuilder($this->client, $this->requestUrl . '/fisher');
    }
    /**
     * Navigate to fisherInv
     *
     * @return FisherInvRequestBuilder
     */
    public function fisherInv(): FisherInvRequestBuilder
    {
        return new FisherInvRequestBuilder($this->client, $this->requestUrl . '/fisherInv');
    }
    /**
     * Navigate to fixed
     *
     * @return FixedRequestBuilder
     */
    public function fixed(): FixedRequestBuilder
    {
        return new FixedRequestBuilder($this->client, $this->requestUrl . '/fixed');
    }
    /**
     * Navigate to floor_Math
     *
     * @return FloorMathRequestBuilder
     */
    public function floorMath(): FloorMathRequestBuilder
    {
        return new FloorMathRequestBuilder($this->client, $this->requestUrl . '/floor_Math');
    }
    /**
     * Navigate to floor_Precise
     *
     * @return FloorPreciseRequestBuilder
     */
    public function floorPrecise(): FloorPreciseRequestBuilder
    {
        return new FloorPreciseRequestBuilder($this->client, $this->requestUrl . '/floor_Precise');
    }
    /**
     * Navigate to fv
     *
     * @return FvRequestBuilder
     */
    public function fv(): FvRequestBuilder
    {
        return new FvRequestBuilder($this->client, $this->requestUrl . '/fv');
    }
    /**
     * Navigate to fvschedule
     *
     * @return FvscheduleRequestBuilder
     */
    public function fvschedule(): FvscheduleRequestBuilder
    {
        return new FvscheduleRequestBuilder($this->client, $this->requestUrl . '/fvschedule');
    }
    /**
     * Navigate to gamma
     *
     * @return GammaRequestBuilder
     */
    public function gamma(): GammaRequestBuilder
    {
        return new GammaRequestBuilder($this->client, $this->requestUrl . '/gamma');
    }
    /**
     * Navigate to gamma_Dist
     *
     * @return GammaDistRequestBuilder
     */
    public function gammaDist(): GammaDistRequestBuilder
    {
        return new GammaDistRequestBuilder($this->client, $this->requestUrl . '/gamma_Dist');
    }
    /**
     * Navigate to gamma_Inv
     *
     * @return GammaInvRequestBuilder
     */
    public function gammaInv(): GammaInvRequestBuilder
    {
        return new GammaInvRequestBuilder($this->client, $this->requestUrl . '/gamma_Inv');
    }
    /**
     * Navigate to gammaLn
     *
     * @return GammaLnRequestBuilder
     */
    public function gammaLn(): GammaLnRequestBuilder
    {
        return new GammaLnRequestBuilder($this->client, $this->requestUrl . '/gammaLn');
    }
    /**
     * Navigate to gammaLn_Precise
     *
     * @return GammaLnPreciseRequestBuilder
     */
    public function gammaLnPrecise(): GammaLnPreciseRequestBuilder
    {
        return new GammaLnPreciseRequestBuilder($this->client, $this->requestUrl . '/gammaLn_Precise');
    }
    /**
     * Navigate to gauss
     *
     * @return GaussRequestBuilder
     */
    public function gauss(): GaussRequestBuilder
    {
        return new GaussRequestBuilder($this->client, $this->requestUrl . '/gauss');
    }
    /**
     * Navigate to gcd
     *
     * @return GcdRequestBuilder
     */
    public function gcd(): GcdRequestBuilder
    {
        return new GcdRequestBuilder($this->client, $this->requestUrl . '/gcd');
    }
    /**
     * Navigate to geoMean
     *
     * @return GeoMeanRequestBuilder
     */
    public function geoMean(): GeoMeanRequestBuilder
    {
        return new GeoMeanRequestBuilder($this->client, $this->requestUrl . '/geoMean');
    }
    /**
     * Navigate to geStep
     *
     * @return GeStepRequestBuilder
     */
    public function geStep(): GeStepRequestBuilder
    {
        return new GeStepRequestBuilder($this->client, $this->requestUrl . '/geStep');
    }
    /**
     * Navigate to harMean
     *
     * @return HarMeanRequestBuilder
     */
    public function harMean(): HarMeanRequestBuilder
    {
        return new HarMeanRequestBuilder($this->client, $this->requestUrl . '/harMean');
    }
    /**
     * Navigate to hex2Bin
     *
     * @return Hex2BinRequestBuilder
     */
    public function hex2Bin(): Hex2BinRequestBuilder
    {
        return new Hex2BinRequestBuilder($this->client, $this->requestUrl . '/hex2Bin');
    }
    /**
     * Navigate to hex2Dec
     *
     * @return Hex2DecRequestBuilder
     */
    public function hex2Dec(): Hex2DecRequestBuilder
    {
        return new Hex2DecRequestBuilder($this->client, $this->requestUrl . '/hex2Dec');
    }
    /**
     * Navigate to hex2Oct
     *
     * @return Hex2OctRequestBuilder
     */
    public function hex2Oct(): Hex2OctRequestBuilder
    {
        return new Hex2OctRequestBuilder($this->client, $this->requestUrl . '/hex2Oct');
    }
    /**
     * Navigate to hlookup
     *
     * @return HlookupRequestBuilder
     */
    public function hlookup(): HlookupRequestBuilder
    {
        return new HlookupRequestBuilder($this->client, $this->requestUrl . '/hlookup');
    }
    /**
     * Navigate to hour
     *
     * @return HourRequestBuilder
     */
    public function hour(): HourRequestBuilder
    {
        return new HourRequestBuilder($this->client, $this->requestUrl . '/hour');
    }
    /**
     * Navigate to hyperlink
     *
     * @return HyperlinkRequestBuilder
     */
    public function hyperlink(): HyperlinkRequestBuilder
    {
        return new HyperlinkRequestBuilder($this->client, $this->requestUrl . '/hyperlink');
    }
    /**
     * Navigate to hypGeom_Dist
     *
     * @return HypGeomDistRequestBuilder
     */
    public function hypGeomDist(): HypGeomDistRequestBuilder
    {
        return new HypGeomDistRequestBuilder($this->client, $this->requestUrl . '/hypGeom_Dist');
    }
    /**
     * Navigate to if
     *
     * @return IfModelRequestBuilder
     */
    public function ifModel(): IfModelRequestBuilder
    {
        return new IfModelRequestBuilder($this->client, $this->requestUrl . '/if');
    }
    /**
     * Navigate to imAbs
     *
     * @return ImAbsRequestBuilder
     */
    public function imAbs(): ImAbsRequestBuilder
    {
        return new ImAbsRequestBuilder($this->client, $this->requestUrl . '/imAbs');
    }
    /**
     * Navigate to imaginary
     *
     * @return ImaginaryRequestBuilder
     */
    public function imaginary(): ImaginaryRequestBuilder
    {
        return new ImaginaryRequestBuilder($this->client, $this->requestUrl . '/imaginary');
    }
    /**
     * Navigate to imArgument
     *
     * @return ImArgumentRequestBuilder
     */
    public function imArgument(): ImArgumentRequestBuilder
    {
        return new ImArgumentRequestBuilder($this->client, $this->requestUrl . '/imArgument');
    }
    /**
     * Navigate to imConjugate
     *
     * @return ImConjugateRequestBuilder
     */
    public function imConjugate(): ImConjugateRequestBuilder
    {
        return new ImConjugateRequestBuilder($this->client, $this->requestUrl . '/imConjugate');
    }
    /**
     * Navigate to imCos
     *
     * @return ImCosRequestBuilder
     */
    public function imCos(): ImCosRequestBuilder
    {
        return new ImCosRequestBuilder($this->client, $this->requestUrl . '/imCos');
    }
    /**
     * Navigate to imCosh
     *
     * @return ImCoshRequestBuilder
     */
    public function imCosh(): ImCoshRequestBuilder
    {
        return new ImCoshRequestBuilder($this->client, $this->requestUrl . '/imCosh');
    }
    /**
     * Navigate to imCot
     *
     * @return ImCotRequestBuilder
     */
    public function imCot(): ImCotRequestBuilder
    {
        return new ImCotRequestBuilder($this->client, $this->requestUrl . '/imCot');
    }
    /**
     * Navigate to imCsc
     *
     * @return ImCscRequestBuilder
     */
    public function imCsc(): ImCscRequestBuilder
    {
        return new ImCscRequestBuilder($this->client, $this->requestUrl . '/imCsc');
    }
    /**
     * Navigate to imCsch
     *
     * @return ImCschRequestBuilder
     */
    public function imCsch(): ImCschRequestBuilder
    {
        return new ImCschRequestBuilder($this->client, $this->requestUrl . '/imCsch');
    }
    /**
     * Navigate to imDiv
     *
     * @return ImDivRequestBuilder
     */
    public function imDiv(): ImDivRequestBuilder
    {
        return new ImDivRequestBuilder($this->client, $this->requestUrl . '/imDiv');
    }
    /**
     * Navigate to imExp
     *
     * @return ImExpRequestBuilder
     */
    public function imExp(): ImExpRequestBuilder
    {
        return new ImExpRequestBuilder($this->client, $this->requestUrl . '/imExp');
    }
    /**
     * Navigate to imLn
     *
     * @return ImLnRequestBuilder
     */
    public function imLn(): ImLnRequestBuilder
    {
        return new ImLnRequestBuilder($this->client, $this->requestUrl . '/imLn');
    }
    /**
     * Navigate to imLog10
     *
     * @return ImLog10RequestBuilder
     */
    public function imLog10(): ImLog10RequestBuilder
    {
        return new ImLog10RequestBuilder($this->client, $this->requestUrl . '/imLog10');
    }
    /**
     * Navigate to imLog2
     *
     * @return ImLog2RequestBuilder
     */
    public function imLog2(): ImLog2RequestBuilder
    {
        return new ImLog2RequestBuilder($this->client, $this->requestUrl . '/imLog2');
    }
    /**
     * Navigate to imPower
     *
     * @return ImPowerRequestBuilder
     */
    public function imPower(): ImPowerRequestBuilder
    {
        return new ImPowerRequestBuilder($this->client, $this->requestUrl . '/imPower');
    }
    /**
     * Navigate to imProduct
     *
     * @return ImProductRequestBuilder
     */
    public function imProduct(): ImProductRequestBuilder
    {
        return new ImProductRequestBuilder($this->client, $this->requestUrl . '/imProduct');
    }
    /**
     * Navigate to imReal
     *
     * @return ImRealRequestBuilder
     */
    public function imReal(): ImRealRequestBuilder
    {
        return new ImRealRequestBuilder($this->client, $this->requestUrl . '/imReal');
    }
    /**
     * Navigate to imSec
     *
     * @return ImSecRequestBuilder
     */
    public function imSec(): ImSecRequestBuilder
    {
        return new ImSecRequestBuilder($this->client, $this->requestUrl . '/imSec');
    }
    /**
     * Navigate to imSech
     *
     * @return ImSechRequestBuilder
     */
    public function imSech(): ImSechRequestBuilder
    {
        return new ImSechRequestBuilder($this->client, $this->requestUrl . '/imSech');
    }
    /**
     * Navigate to imSin
     *
     * @return ImSinRequestBuilder
     */
    public function imSin(): ImSinRequestBuilder
    {
        return new ImSinRequestBuilder($this->client, $this->requestUrl . '/imSin');
    }
    /**
     * Navigate to imSinh
     *
     * @return ImSinhRequestBuilder
     */
    public function imSinh(): ImSinhRequestBuilder
    {
        return new ImSinhRequestBuilder($this->client, $this->requestUrl . '/imSinh');
    }
    /**
     * Navigate to imSqrt
     *
     * @return ImSqrtRequestBuilder
     */
    public function imSqrt(): ImSqrtRequestBuilder
    {
        return new ImSqrtRequestBuilder($this->client, $this->requestUrl . '/imSqrt');
    }
    /**
     * Navigate to imSub
     *
     * @return ImSubRequestBuilder
     */
    public function imSub(): ImSubRequestBuilder
    {
        return new ImSubRequestBuilder($this->client, $this->requestUrl . '/imSub');
    }
    /**
     * Navigate to imSum
     *
     * @return ImSumRequestBuilder
     */
    public function imSum(): ImSumRequestBuilder
    {
        return new ImSumRequestBuilder($this->client, $this->requestUrl . '/imSum');
    }
    /**
     * Navigate to imTan
     *
     * @return ImTanRequestBuilder
     */
    public function imTan(): ImTanRequestBuilder
    {
        return new ImTanRequestBuilder($this->client, $this->requestUrl . '/imTan');
    }
    /**
     * Navigate to int
     *
     * @return IntModelRequestBuilder
     */
    public function intModel(): IntModelRequestBuilder
    {
        return new IntModelRequestBuilder($this->client, $this->requestUrl . '/int');
    }
    /**
     * Navigate to intRate
     *
     * @return IntRateRequestBuilder
     */
    public function intRate(): IntRateRequestBuilder
    {
        return new IntRateRequestBuilder($this->client, $this->requestUrl . '/intRate');
    }
    /**
     * Navigate to ipmt
     *
     * @return IpmtRequestBuilder
     */
    public function ipmt(): IpmtRequestBuilder
    {
        return new IpmtRequestBuilder($this->client, $this->requestUrl . '/ipmt');
    }
    /**
     * Navigate to irr
     *
     * @return IrrRequestBuilder
     */
    public function irr(): IrrRequestBuilder
    {
        return new IrrRequestBuilder($this->client, $this->requestUrl . '/irr');
    }
    /**
     * Navigate to isErr
     *
     * @return IsErrRequestBuilder
     */
    public function isErr(): IsErrRequestBuilder
    {
        return new IsErrRequestBuilder($this->client, $this->requestUrl . '/isErr');
    }
    /**
     * Navigate to isError
     *
     * @return IsErrorRequestBuilder
     */
    public function isError(): IsErrorRequestBuilder
    {
        return new IsErrorRequestBuilder($this->client, $this->requestUrl . '/isError');
    }
    /**
     * Navigate to isEven
     *
     * @return IsEvenRequestBuilder
     */
    public function isEven(): IsEvenRequestBuilder
    {
        return new IsEvenRequestBuilder($this->client, $this->requestUrl . '/isEven');
    }
    /**
     * Navigate to isFormula
     *
     * @return IsFormulaRequestBuilder
     */
    public function isFormula(): IsFormulaRequestBuilder
    {
        return new IsFormulaRequestBuilder($this->client, $this->requestUrl . '/isFormula');
    }
    /**
     * Navigate to isLogical
     *
     * @return IsLogicalRequestBuilder
     */
    public function isLogical(): IsLogicalRequestBuilder
    {
        return new IsLogicalRequestBuilder($this->client, $this->requestUrl . '/isLogical');
    }
    /**
     * Navigate to isNA
     *
     * @return IsNARequestBuilder
     */
    public function isNA(): IsNARequestBuilder
    {
        return new IsNARequestBuilder($this->client, $this->requestUrl . '/isNA');
    }
    /**
     * Navigate to isNonText
     *
     * @return IsNonTextRequestBuilder
     */
    public function isNonText(): IsNonTextRequestBuilder
    {
        return new IsNonTextRequestBuilder($this->client, $this->requestUrl . '/isNonText');
    }
    /**
     * Navigate to isNumber
     *
     * @return IsNumberRequestBuilder
     */
    public function isNumber(): IsNumberRequestBuilder
    {
        return new IsNumberRequestBuilder($this->client, $this->requestUrl . '/isNumber');
    }
    /**
     * Navigate to iso_Ceiling
     *
     * @return IsoCeilingRequestBuilder
     */
    public function isoCeiling(): IsoCeilingRequestBuilder
    {
        return new IsoCeilingRequestBuilder($this->client, $this->requestUrl . '/iso_Ceiling');
    }
    /**
     * Navigate to isOdd
     *
     * @return IsOddRequestBuilder
     */
    public function isOdd(): IsOddRequestBuilder
    {
        return new IsOddRequestBuilder($this->client, $this->requestUrl . '/isOdd');
    }
    /**
     * Navigate to isoWeekNum
     *
     * @return IsoWeekNumRequestBuilder
     */
    public function isoWeekNum(): IsoWeekNumRequestBuilder
    {
        return new IsoWeekNumRequestBuilder($this->client, $this->requestUrl . '/isoWeekNum');
    }
    /**
     * Navigate to ispmt
     *
     * @return IspmtRequestBuilder
     */
    public function ispmt(): IspmtRequestBuilder
    {
        return new IspmtRequestBuilder($this->client, $this->requestUrl . '/ispmt');
    }
    /**
     * Navigate to isref
     *
     * @return IsrefRequestBuilder
     */
    public function isref(): IsrefRequestBuilder
    {
        return new IsrefRequestBuilder($this->client, $this->requestUrl . '/isref');
    }
    /**
     * Navigate to isText
     *
     * @return IsTextRequestBuilder
     */
    public function isText(): IsTextRequestBuilder
    {
        return new IsTextRequestBuilder($this->client, $this->requestUrl . '/isText');
    }
    /**
     * Navigate to kurt
     *
     * @return KurtRequestBuilder
     */
    public function kurt(): KurtRequestBuilder
    {
        return new KurtRequestBuilder($this->client, $this->requestUrl . '/kurt');
    }
    /**
     * Navigate to large
     *
     * @return LargeRequestBuilder
     */
    public function large(): LargeRequestBuilder
    {
        return new LargeRequestBuilder($this->client, $this->requestUrl . '/large');
    }
    /**
     * Navigate to lcm
     *
     * @return LcmRequestBuilder
     */
    public function lcm(): LcmRequestBuilder
    {
        return new LcmRequestBuilder($this->client, $this->requestUrl . '/lcm');
    }
    /**
     * Navigate to left
     *
     * @return LeftRequestBuilder
     */
    public function left(): LeftRequestBuilder
    {
        return new LeftRequestBuilder($this->client, $this->requestUrl . '/left');
    }
    /**
     * Navigate to leftb
     *
     * @return LeftbRequestBuilder
     */
    public function leftb(): LeftbRequestBuilder
    {
        return new LeftbRequestBuilder($this->client, $this->requestUrl . '/leftb');
    }
    /**
     * Navigate to len
     *
     * @return LenRequestBuilder
     */
    public function len(): LenRequestBuilder
    {
        return new LenRequestBuilder($this->client, $this->requestUrl . '/len');
    }
    /**
     * Navigate to lenb
     *
     * @return LenbRequestBuilder
     */
    public function lenb(): LenbRequestBuilder
    {
        return new LenbRequestBuilder($this->client, $this->requestUrl . '/lenb');
    }
    /**
     * Navigate to ln
     *
     * @return LnRequestBuilder
     */
    public function ln(): LnRequestBuilder
    {
        return new LnRequestBuilder($this->client, $this->requestUrl . '/ln');
    }
    /**
     * Navigate to log
     *
     * @return LogRequestBuilder
     */
    public function log(): LogRequestBuilder
    {
        return new LogRequestBuilder($this->client, $this->requestUrl . '/log');
    }
    /**
     * Navigate to log10
     *
     * @return Log10RequestBuilder
     */
    public function log10(): Log10RequestBuilder
    {
        return new Log10RequestBuilder($this->client, $this->requestUrl . '/log10');
    }
    /**
     * Navigate to logNorm_Dist
     *
     * @return LogNormDistRequestBuilder
     */
    public function logNormDist(): LogNormDistRequestBuilder
    {
        return new LogNormDistRequestBuilder($this->client, $this->requestUrl . '/logNorm_Dist');
    }
    /**
     * Navigate to logNorm_Inv
     *
     * @return LogNormInvRequestBuilder
     */
    public function logNormInv(): LogNormInvRequestBuilder
    {
        return new LogNormInvRequestBuilder($this->client, $this->requestUrl . '/logNorm_Inv');
    }
    /**
     * Navigate to lookup
     *
     * @return LookupRequestBuilder
     */
    public function lookup(): LookupRequestBuilder
    {
        return new LookupRequestBuilder($this->client, $this->requestUrl . '/lookup');
    }
    /**
     * Navigate to lower
     *
     * @return LowerRequestBuilder
     */
    public function lower(): LowerRequestBuilder
    {
        return new LowerRequestBuilder($this->client, $this->requestUrl . '/lower');
    }
    /**
     * Navigate to match
     *
     * @return MatchModelRequestBuilder
     */
    public function matchModel(): MatchModelRequestBuilder
    {
        return new MatchModelRequestBuilder($this->client, $this->requestUrl . '/match');
    }
    /**
     * Navigate to max
     *
     * @return MaxRequestBuilder
     */
    public function max(): MaxRequestBuilder
    {
        return new MaxRequestBuilder($this->client, $this->requestUrl . '/max');
    }
    /**
     * Navigate to maxA
     *
     * @return MaxARequestBuilder
     */
    public function maxA(): MaxARequestBuilder
    {
        return new MaxARequestBuilder($this->client, $this->requestUrl . '/maxA');
    }
    /**
     * Navigate to mduration
     *
     * @return MdurationRequestBuilder
     */
    public function mduration(): MdurationRequestBuilder
    {
        return new MdurationRequestBuilder($this->client, $this->requestUrl . '/mduration');
    }
    /**
     * Navigate to median
     *
     * @return MedianRequestBuilder
     */
    public function median(): MedianRequestBuilder
    {
        return new MedianRequestBuilder($this->client, $this->requestUrl . '/median');
    }
    /**
     * Navigate to mid
     *
     * @return MidRequestBuilder
     */
    public function mid(): MidRequestBuilder
    {
        return new MidRequestBuilder($this->client, $this->requestUrl . '/mid');
    }
    /**
     * Navigate to midb
     *
     * @return MidbRequestBuilder
     */
    public function midb(): MidbRequestBuilder
    {
        return new MidbRequestBuilder($this->client, $this->requestUrl . '/midb');
    }
    /**
     * Navigate to min
     *
     * @return MinRequestBuilder
     */
    public function min(): MinRequestBuilder
    {
        return new MinRequestBuilder($this->client, $this->requestUrl . '/min');
    }
    /**
     * Navigate to minA
     *
     * @return MinARequestBuilder
     */
    public function minA(): MinARequestBuilder
    {
        return new MinARequestBuilder($this->client, $this->requestUrl . '/minA');
    }
    /**
     * Navigate to minute
     *
     * @return MinuteRequestBuilder
     */
    public function minute(): MinuteRequestBuilder
    {
        return new MinuteRequestBuilder($this->client, $this->requestUrl . '/minute');
    }
    /**
     * Navigate to mirr
     *
     * @return MirrRequestBuilder
     */
    public function mirr(): MirrRequestBuilder
    {
        return new MirrRequestBuilder($this->client, $this->requestUrl . '/mirr');
    }
    /**
     * Navigate to mod
     *
     * @return ModRequestBuilder
     */
    public function mod(): ModRequestBuilder
    {
        return new ModRequestBuilder($this->client, $this->requestUrl . '/mod');
    }
    /**
     * Navigate to month
     *
     * @return MonthRequestBuilder
     */
    public function month(): MonthRequestBuilder
    {
        return new MonthRequestBuilder($this->client, $this->requestUrl . '/month');
    }
    /**
     * Navigate to mround
     *
     * @return MroundRequestBuilder
     */
    public function mround(): MroundRequestBuilder
    {
        return new MroundRequestBuilder($this->client, $this->requestUrl . '/mround');
    }
    /**
     * Navigate to multiNomial
     *
     * @return MultiNomialRequestBuilder
     */
    public function multiNomial(): MultiNomialRequestBuilder
    {
        return new MultiNomialRequestBuilder($this->client, $this->requestUrl . '/multiNomial');
    }
    /**
     * Navigate to n
     *
     * @return NRequestBuilder
     */
    public function n(): NRequestBuilder
    {
        return new NRequestBuilder($this->client, $this->requestUrl . '/n');
    }
    /**
     * Navigate to na
     *
     * @return NaRequestBuilder
     */
    public function na(): NaRequestBuilder
    {
        return new NaRequestBuilder($this->client, $this->requestUrl . '/na');
    }
    /**
     * Navigate to negBinom_Dist
     *
     * @return NegBinomDistRequestBuilder
     */
    public function negBinomDist(): NegBinomDistRequestBuilder
    {
        return new NegBinomDistRequestBuilder($this->client, $this->requestUrl . '/negBinom_Dist');
    }
    /**
     * Navigate to networkDays
     *
     * @return NetworkDaysRequestBuilder
     */
    public function networkDays(): NetworkDaysRequestBuilder
    {
        return new NetworkDaysRequestBuilder($this->client, $this->requestUrl . '/networkDays');
    }
    /**
     * Navigate to networkDays_Intl
     *
     * @return NetworkDaysIntlRequestBuilder
     */
    public function networkDaysIntl(): NetworkDaysIntlRequestBuilder
    {
        return new NetworkDaysIntlRequestBuilder($this->client, $this->requestUrl . '/networkDays_Intl');
    }
    /**
     * Navigate to nominal
     *
     * @return NominalRequestBuilder
     */
    public function nominal(): NominalRequestBuilder
    {
        return new NominalRequestBuilder($this->client, $this->requestUrl . '/nominal');
    }
    /**
     * Navigate to norm_Dist
     *
     * @return NormDistRequestBuilder
     */
    public function normDist(): NormDistRequestBuilder
    {
        return new NormDistRequestBuilder($this->client, $this->requestUrl . '/norm_Dist');
    }
    /**
     * Navigate to norm_Inv
     *
     * @return NormInvRequestBuilder
     */
    public function normInv(): NormInvRequestBuilder
    {
        return new NormInvRequestBuilder($this->client, $this->requestUrl . '/norm_Inv');
    }
    /**
     * Navigate to norm_S_Dist
     *
     * @return NormSDistRequestBuilder
     */
    public function normSDist(): NormSDistRequestBuilder
    {
        return new NormSDistRequestBuilder($this->client, $this->requestUrl . '/norm_S_Dist');
    }
    /**
     * Navigate to norm_S_Inv
     *
     * @return NormSInvRequestBuilder
     */
    public function normSInv(): NormSInvRequestBuilder
    {
        return new NormSInvRequestBuilder($this->client, $this->requestUrl . '/norm_S_Inv');
    }
    /**
     * Navigate to not
     *
     * @return NotRequestBuilder
     */
    public function not(): NotRequestBuilder
    {
        return new NotRequestBuilder($this->client, $this->requestUrl . '/not');
    }
    /**
     * Navigate to now
     *
     * @return NowRequestBuilder
     */
    public function now(): NowRequestBuilder
    {
        return new NowRequestBuilder($this->client, $this->requestUrl . '/now');
    }
    /**
     * Navigate to nper
     *
     * @return NperRequestBuilder
     */
    public function nper(): NperRequestBuilder
    {
        return new NperRequestBuilder($this->client, $this->requestUrl . '/nper');
    }
    /**
     * Navigate to npv
     *
     * @return NpvRequestBuilder
     */
    public function npv(): NpvRequestBuilder
    {
        return new NpvRequestBuilder($this->client, $this->requestUrl . '/npv');
    }
    /**
     * Navigate to numberValue
     *
     * @return NumberValueRequestBuilder
     */
    public function numberValue(): NumberValueRequestBuilder
    {
        return new NumberValueRequestBuilder($this->client, $this->requestUrl . '/numberValue');
    }
    /**
     * Navigate to oct2Bin
     *
     * @return Oct2BinRequestBuilder
     */
    public function oct2Bin(): Oct2BinRequestBuilder
    {
        return new Oct2BinRequestBuilder($this->client, $this->requestUrl . '/oct2Bin');
    }
    /**
     * Navigate to oct2Dec
     *
     * @return Oct2DecRequestBuilder
     */
    public function oct2Dec(): Oct2DecRequestBuilder
    {
        return new Oct2DecRequestBuilder($this->client, $this->requestUrl . '/oct2Dec');
    }
    /**
     * Navigate to oct2Hex
     *
     * @return Oct2HexRequestBuilder
     */
    public function oct2Hex(): Oct2HexRequestBuilder
    {
        return new Oct2HexRequestBuilder($this->client, $this->requestUrl . '/oct2Hex');
    }
    /**
     * Navigate to odd
     *
     * @return OddRequestBuilder
     */
    public function odd(): OddRequestBuilder
    {
        return new OddRequestBuilder($this->client, $this->requestUrl . '/odd');
    }
    /**
     * Navigate to oddFPrice
     *
     * @return OddFPriceRequestBuilder
     */
    public function oddFPrice(): OddFPriceRequestBuilder
    {
        return new OddFPriceRequestBuilder($this->client, $this->requestUrl . '/oddFPrice');
    }
    /**
     * Navigate to oddFYield
     *
     * @return OddFYieldRequestBuilder
     */
    public function oddFYield(): OddFYieldRequestBuilder
    {
        return new OddFYieldRequestBuilder($this->client, $this->requestUrl . '/oddFYield');
    }
    /**
     * Navigate to oddLPrice
     *
     * @return OddLPriceRequestBuilder
     */
    public function oddLPrice(): OddLPriceRequestBuilder
    {
        return new OddLPriceRequestBuilder($this->client, $this->requestUrl . '/oddLPrice');
    }
    /**
     * Navigate to oddLYield
     *
     * @return OddLYieldRequestBuilder
     */
    public function oddLYield(): OddLYieldRequestBuilder
    {
        return new OddLYieldRequestBuilder($this->client, $this->requestUrl . '/oddLYield');
    }
    /**
     * Navigate to or
     *
     * @return OrModelRequestBuilder
     */
    public function orModel(): OrModelRequestBuilder
    {
        return new OrModelRequestBuilder($this->client, $this->requestUrl . '/or');
    }
    /**
     * Navigate to pduration
     *
     * @return PdurationRequestBuilder
     */
    public function pduration(): PdurationRequestBuilder
    {
        return new PdurationRequestBuilder($this->client, $this->requestUrl . '/pduration');
    }
    /**
     * Navigate to percentile_Exc
     *
     * @return PercentileExcRequestBuilder
     */
    public function percentileExc(): PercentileExcRequestBuilder
    {
        return new PercentileExcRequestBuilder($this->client, $this->requestUrl . '/percentile_Exc');
    }
    /**
     * Navigate to percentile_Inc
     *
     * @return PercentileIncRequestBuilder
     */
    public function percentileInc(): PercentileIncRequestBuilder
    {
        return new PercentileIncRequestBuilder($this->client, $this->requestUrl . '/percentile_Inc');
    }
    /**
     * Navigate to percentRank_Exc
     *
     * @return PercentRankExcRequestBuilder
     */
    public function percentRankExc(): PercentRankExcRequestBuilder
    {
        return new PercentRankExcRequestBuilder($this->client, $this->requestUrl . '/percentRank_Exc');
    }
    /**
     * Navigate to percentRank_Inc
     *
     * @return PercentRankIncRequestBuilder
     */
    public function percentRankInc(): PercentRankIncRequestBuilder
    {
        return new PercentRankIncRequestBuilder($this->client, $this->requestUrl . '/percentRank_Inc');
    }
    /**
     * Navigate to permut
     *
     * @return PermutRequestBuilder
     */
    public function permut(): PermutRequestBuilder
    {
        return new PermutRequestBuilder($this->client, $this->requestUrl . '/permut');
    }
    /**
     * Navigate to permutationa
     *
     * @return PermutationaRequestBuilder
     */
    public function permutationa(): PermutationaRequestBuilder
    {
        return new PermutationaRequestBuilder($this->client, $this->requestUrl . '/permutationa');
    }
    /**
     * Navigate to phi
     *
     * @return PhiRequestBuilder
     */
    public function phi(): PhiRequestBuilder
    {
        return new PhiRequestBuilder($this->client, $this->requestUrl . '/phi');
    }
    /**
     * Navigate to pi
     *
     * @return PiRequestBuilder
     */
    public function pi(): PiRequestBuilder
    {
        return new PiRequestBuilder($this->client, $this->requestUrl . '/pi');
    }
    /**
     * Navigate to pmt
     *
     * @return PmtRequestBuilder
     */
    public function pmt(): PmtRequestBuilder
    {
        return new PmtRequestBuilder($this->client, $this->requestUrl . '/pmt');
    }
    /**
     * Navigate to poisson_Dist
     *
     * @return PoissonDistRequestBuilder
     */
    public function poissonDist(): PoissonDistRequestBuilder
    {
        return new PoissonDistRequestBuilder($this->client, $this->requestUrl . '/poisson_Dist');
    }
    /**
     * Navigate to power
     *
     * @return PowerRequestBuilder
     */
    public function power(): PowerRequestBuilder
    {
        return new PowerRequestBuilder($this->client, $this->requestUrl . '/power');
    }
    /**
     * Navigate to ppmt
     *
     * @return PpmtRequestBuilder
     */
    public function ppmt(): PpmtRequestBuilder
    {
        return new PpmtRequestBuilder($this->client, $this->requestUrl . '/ppmt');
    }
    /**
     * Navigate to price
     *
     * @return PriceRequestBuilder
     */
    public function price(): PriceRequestBuilder
    {
        return new PriceRequestBuilder($this->client, $this->requestUrl . '/price');
    }
    /**
     * Navigate to priceDisc
     *
     * @return PriceDiscRequestBuilder
     */
    public function priceDisc(): PriceDiscRequestBuilder
    {
        return new PriceDiscRequestBuilder($this->client, $this->requestUrl . '/priceDisc');
    }
    /**
     * Navigate to priceMat
     *
     * @return PriceMatRequestBuilder
     */
    public function priceMat(): PriceMatRequestBuilder
    {
        return new PriceMatRequestBuilder($this->client, $this->requestUrl . '/priceMat');
    }
    /**
     * Navigate to product
     *
     * @return ProductRequestBuilder
     */
    public function product(): ProductRequestBuilder
    {
        return new ProductRequestBuilder($this->client, $this->requestUrl . '/product');
    }
    /**
     * Navigate to proper
     *
     * @return ProperRequestBuilder
     */
    public function proper(): ProperRequestBuilder
    {
        return new ProperRequestBuilder($this->client, $this->requestUrl . '/proper');
    }
    /**
     * Navigate to pv
     *
     * @return PvRequestBuilder
     */
    public function pv(): PvRequestBuilder
    {
        return new PvRequestBuilder($this->client, $this->requestUrl . '/pv');
    }
    /**
     * Navigate to quartile_Exc
     *
     * @return QuartileExcRequestBuilder
     */
    public function quartileExc(): QuartileExcRequestBuilder
    {
        return new QuartileExcRequestBuilder($this->client, $this->requestUrl . '/quartile_Exc');
    }
    /**
     * Navigate to quartile_Inc
     *
     * @return QuartileIncRequestBuilder
     */
    public function quartileInc(): QuartileIncRequestBuilder
    {
        return new QuartileIncRequestBuilder($this->client, $this->requestUrl . '/quartile_Inc');
    }
    /**
     * Navigate to quotient
     *
     * @return QuotientRequestBuilder
     */
    public function quotient(): QuotientRequestBuilder
    {
        return new QuotientRequestBuilder($this->client, $this->requestUrl . '/quotient');
    }
    /**
     * Navigate to radians
     *
     * @return RadiansRequestBuilder
     */
    public function radians(): RadiansRequestBuilder
    {
        return new RadiansRequestBuilder($this->client, $this->requestUrl . '/radians');
    }
    /**
     * Navigate to rand
     *
     * @return RandRequestBuilder
     */
    public function rand(): RandRequestBuilder
    {
        return new RandRequestBuilder($this->client, $this->requestUrl . '/rand');
    }
    /**
     * Navigate to randBetween
     *
     * @return RandBetweenRequestBuilder
     */
    public function randBetween(): RandBetweenRequestBuilder
    {
        return new RandBetweenRequestBuilder($this->client, $this->requestUrl . '/randBetween');
    }
    /**
     * Navigate to rank_Avg
     *
     * @return RankAvgRequestBuilder
     */
    public function rankAvg(): RankAvgRequestBuilder
    {
        return new RankAvgRequestBuilder($this->client, $this->requestUrl . '/rank_Avg');
    }
    /**
     * Navigate to rank_Eq
     *
     * @return RankEqRequestBuilder
     */
    public function rankEq(): RankEqRequestBuilder
    {
        return new RankEqRequestBuilder($this->client, $this->requestUrl . '/rank_Eq');
    }
    /**
     * Navigate to rate
     *
     * @return RateRequestBuilder
     */
    public function rate(): RateRequestBuilder
    {
        return new RateRequestBuilder($this->client, $this->requestUrl . '/rate');
    }
    /**
     * Navigate to received
     *
     * @return ReceivedRequestBuilder
     */
    public function received(): ReceivedRequestBuilder
    {
        return new ReceivedRequestBuilder($this->client, $this->requestUrl . '/received');
    }
    /**
     * Navigate to replace
     *
     * @return ReplaceRequestBuilder
     */
    public function replace(): ReplaceRequestBuilder
    {
        return new ReplaceRequestBuilder($this->client, $this->requestUrl . '/replace');
    }
    /**
     * Navigate to replaceB
     *
     * @return ReplaceBRequestBuilder
     */
    public function replaceB(): ReplaceBRequestBuilder
    {
        return new ReplaceBRequestBuilder($this->client, $this->requestUrl . '/replaceB');
    }
    /**
     * Navigate to rept
     *
     * @return ReptRequestBuilder
     */
    public function rept(): ReptRequestBuilder
    {
        return new ReptRequestBuilder($this->client, $this->requestUrl . '/rept');
    }
    /**
     * Navigate to right
     *
     * @return RightRequestBuilder
     */
    public function right(): RightRequestBuilder
    {
        return new RightRequestBuilder($this->client, $this->requestUrl . '/right');
    }
    /**
     * Navigate to rightb
     *
     * @return RightbRequestBuilder
     */
    public function rightb(): RightbRequestBuilder
    {
        return new RightbRequestBuilder($this->client, $this->requestUrl . '/rightb');
    }
    /**
     * Navigate to roman
     *
     * @return RomanRequestBuilder
     */
    public function roman(): RomanRequestBuilder
    {
        return new RomanRequestBuilder($this->client, $this->requestUrl . '/roman');
    }
    /**
     * Navigate to round
     *
     * @return RoundRequestBuilder
     */
    public function round(): RoundRequestBuilder
    {
        return new RoundRequestBuilder($this->client, $this->requestUrl . '/round');
    }
    /**
     * Navigate to roundDown
     *
     * @return RoundDownRequestBuilder
     */
    public function roundDown(): RoundDownRequestBuilder
    {
        return new RoundDownRequestBuilder($this->client, $this->requestUrl . '/roundDown');
    }
    /**
     * Navigate to roundUp
     *
     * @return RoundUpRequestBuilder
     */
    public function roundUp(): RoundUpRequestBuilder
    {
        return new RoundUpRequestBuilder($this->client, $this->requestUrl . '/roundUp');
    }
    /**
     * Navigate to rows
     *
     * @return RowsRequestBuilder
     */
    public function rows(): RowsRequestBuilder
    {
        return new RowsRequestBuilder($this->client, $this->requestUrl . '/rows');
    }
    /**
     * Navigate to rri
     *
     * @return RriRequestBuilder
     */
    public function rri(): RriRequestBuilder
    {
        return new RriRequestBuilder($this->client, $this->requestUrl . '/rri');
    }
    /**
     * Navigate to sec
     *
     * @return SecRequestBuilder
     */
    public function sec(): SecRequestBuilder
    {
        return new SecRequestBuilder($this->client, $this->requestUrl . '/sec');
    }
    /**
     * Navigate to sech
     *
     * @return SechRequestBuilder
     */
    public function sech(): SechRequestBuilder
    {
        return new SechRequestBuilder($this->client, $this->requestUrl . '/sech');
    }
    /**
     * Navigate to second
     *
     * @return SecondRequestBuilder
     */
    public function second(): SecondRequestBuilder
    {
        return new SecondRequestBuilder($this->client, $this->requestUrl . '/second');
    }
    /**
     * Navigate to seriesSum
     *
     * @return SeriesSumRequestBuilder
     */
    public function seriesSum(): SeriesSumRequestBuilder
    {
        return new SeriesSumRequestBuilder($this->client, $this->requestUrl . '/seriesSum');
    }
    /**
     * Navigate to sheet
     *
     * @return SheetRequestBuilder
     */
    public function sheet(): SheetRequestBuilder
    {
        return new SheetRequestBuilder($this->client, $this->requestUrl . '/sheet');
    }
    /**
     * Navigate to sheets
     *
     * @return SheetsRequestBuilder
     */
    public function sheets(): SheetsRequestBuilder
    {
        return new SheetsRequestBuilder($this->client, $this->requestUrl . '/sheets');
    }
    /**
     * Navigate to sign
     *
     * @return SignRequestBuilder
     */
    public function sign(): SignRequestBuilder
    {
        return new SignRequestBuilder($this->client, $this->requestUrl . '/sign');
    }
    /**
     * Navigate to sin
     *
     * @return SinRequestBuilder
     */
    public function sin(): SinRequestBuilder
    {
        return new SinRequestBuilder($this->client, $this->requestUrl . '/sin');
    }
    /**
     * Navigate to sinh
     *
     * @return SinhRequestBuilder
     */
    public function sinh(): SinhRequestBuilder
    {
        return new SinhRequestBuilder($this->client, $this->requestUrl . '/sinh');
    }
    /**
     * Navigate to skew
     *
     * @return SkewRequestBuilder
     */
    public function skew(): SkewRequestBuilder
    {
        return new SkewRequestBuilder($this->client, $this->requestUrl . '/skew');
    }
    /**
     * Navigate to skew_p
     *
     * @return SkewPRequestBuilder
     */
    public function skewP(): SkewPRequestBuilder
    {
        return new SkewPRequestBuilder($this->client, $this->requestUrl . '/skew_p');
    }
    /**
     * Navigate to sln
     *
     * @return SlnRequestBuilder
     */
    public function sln(): SlnRequestBuilder
    {
        return new SlnRequestBuilder($this->client, $this->requestUrl . '/sln');
    }
    /**
     * Navigate to small
     *
     * @return SmallRequestBuilder
     */
    public function small(): SmallRequestBuilder
    {
        return new SmallRequestBuilder($this->client, $this->requestUrl . '/small');
    }
    /**
     * Navigate to sqrt
     *
     * @return SqrtRequestBuilder
     */
    public function sqrt(): SqrtRequestBuilder
    {
        return new SqrtRequestBuilder($this->client, $this->requestUrl . '/sqrt');
    }
    /**
     * Navigate to sqrtPi
     *
     * @return SqrtPiRequestBuilder
     */
    public function sqrtPi(): SqrtPiRequestBuilder
    {
        return new SqrtPiRequestBuilder($this->client, $this->requestUrl . '/sqrtPi');
    }
    /**
     * Navigate to standardize
     *
     * @return StandardizeRequestBuilder
     */
    public function standardize(): StandardizeRequestBuilder
    {
        return new StandardizeRequestBuilder($this->client, $this->requestUrl . '/standardize');
    }
    /**
     * Navigate to stDev_P
     *
     * @return StDevPRequestBuilder
     */
    public function stDevP(): StDevPRequestBuilder
    {
        return new StDevPRequestBuilder($this->client, $this->requestUrl . '/stDev_P');
    }
    /**
     * Navigate to stDev_S
     *
     * @return StDevSRequestBuilder
     */
    public function stDevS(): StDevSRequestBuilder
    {
        return new StDevSRequestBuilder($this->client, $this->requestUrl . '/stDev_S');
    }
    /**
     * Navigate to stDevA
     *
     * @return StDevARequestBuilder
     */
    public function stDevA(): StDevARequestBuilder
    {
        return new StDevARequestBuilder($this->client, $this->requestUrl . '/stDevA');
    }
    /**
     * Navigate to stDevPA
     *
     * @return StDevPARequestBuilder
     */
    public function stDevPA(): StDevPARequestBuilder
    {
        return new StDevPARequestBuilder($this->client, $this->requestUrl . '/stDevPA');
    }
    /**
     * Navigate to substitute
     *
     * @return SubstituteRequestBuilder
     */
    public function substitute(): SubstituteRequestBuilder
    {
        return new SubstituteRequestBuilder($this->client, $this->requestUrl . '/substitute');
    }
    /**
     * Navigate to subtotal
     *
     * @return SubtotalRequestBuilder
     */
    public function subtotal(): SubtotalRequestBuilder
    {
        return new SubtotalRequestBuilder($this->client, $this->requestUrl . '/subtotal');
    }
    /**
     * Navigate to sum
     *
     * @return SumRequestBuilder
     */
    public function sum(): SumRequestBuilder
    {
        return new SumRequestBuilder($this->client, $this->requestUrl . '/sum');
    }
    /**
     * Navigate to sumIf
     *
     * @return SumIfRequestBuilder
     */
    public function sumIf(): SumIfRequestBuilder
    {
        return new SumIfRequestBuilder($this->client, $this->requestUrl . '/sumIf');
    }
    /**
     * Navigate to sumIfs
     *
     * @return SumIfsRequestBuilder
     */
    public function sumIfs(): SumIfsRequestBuilder
    {
        return new SumIfsRequestBuilder($this->client, $this->requestUrl . '/sumIfs');
    }
    /**
     * Navigate to sumSq
     *
     * @return SumSqRequestBuilder
     */
    public function sumSq(): SumSqRequestBuilder
    {
        return new SumSqRequestBuilder($this->client, $this->requestUrl . '/sumSq');
    }
    /**
     * Navigate to syd
     *
     * @return SydRequestBuilder
     */
    public function syd(): SydRequestBuilder
    {
        return new SydRequestBuilder($this->client, $this->requestUrl . '/syd');
    }
    /**
     * Navigate to t
     *
     * @return TRequestBuilder
     */
    public function t(): TRequestBuilder
    {
        return new TRequestBuilder($this->client, $this->requestUrl . '/t');
    }
    /**
     * Navigate to t_Dist
     *
     * @return TDistRequestBuilder
     */
    public function tDist(): TDistRequestBuilder
    {
        return new TDistRequestBuilder($this->client, $this->requestUrl . '/t_Dist');
    }
    /**
     * Navigate to t_Dist_2T
     *
     * @return TDist2TRequestBuilder
     */
    public function tDist2T(): TDist2TRequestBuilder
    {
        return new TDist2TRequestBuilder($this->client, $this->requestUrl . '/t_Dist_2T');
    }
    /**
     * Navigate to t_Dist_RT
     *
     * @return TDistRTRequestBuilder
     */
    public function tDistRT(): TDistRTRequestBuilder
    {
        return new TDistRTRequestBuilder($this->client, $this->requestUrl . '/t_Dist_RT');
    }
    /**
     * Navigate to t_Inv
     *
     * @return TInvRequestBuilder
     */
    public function tInv(): TInvRequestBuilder
    {
        return new TInvRequestBuilder($this->client, $this->requestUrl . '/t_Inv');
    }
    /**
     * Navigate to t_Inv_2T
     *
     * @return TInv2TRequestBuilder
     */
    public function tInv2T(): TInv2TRequestBuilder
    {
        return new TInv2TRequestBuilder($this->client, $this->requestUrl . '/t_Inv_2T');
    }
    /**
     * Navigate to tan
     *
     * @return TanRequestBuilder
     */
    public function tan(): TanRequestBuilder
    {
        return new TanRequestBuilder($this->client, $this->requestUrl . '/tan');
    }
    /**
     * Navigate to tanh
     *
     * @return TanhRequestBuilder
     */
    public function tanh(): TanhRequestBuilder
    {
        return new TanhRequestBuilder($this->client, $this->requestUrl . '/tanh');
    }
    /**
     * Navigate to tbillEq
     *
     * @return TbillEqRequestBuilder
     */
    public function tbillEq(): TbillEqRequestBuilder
    {
        return new TbillEqRequestBuilder($this->client, $this->requestUrl . '/tbillEq');
    }
    /**
     * Navigate to tbillPrice
     *
     * @return TbillPriceRequestBuilder
     */
    public function tbillPrice(): TbillPriceRequestBuilder
    {
        return new TbillPriceRequestBuilder($this->client, $this->requestUrl . '/tbillPrice');
    }
    /**
     * Navigate to tbillYield
     *
     * @return TbillYieldRequestBuilder
     */
    public function tbillYield(): TbillYieldRequestBuilder
    {
        return new TbillYieldRequestBuilder($this->client, $this->requestUrl . '/tbillYield');
    }
    /**
     * Navigate to text
     *
     * @return TextRequestBuilder
     */
    public function text(): TextRequestBuilder
    {
        return new TextRequestBuilder($this->client, $this->requestUrl . '/text');
    }
    /**
     * Navigate to time
     *
     * @return TimeRequestBuilder
     */
    public function time(): TimeRequestBuilder
    {
        return new TimeRequestBuilder($this->client, $this->requestUrl . '/time');
    }
    /**
     * Navigate to timevalue
     *
     * @return TimevalueRequestBuilder
     */
    public function timevalue(): TimevalueRequestBuilder
    {
        return new TimevalueRequestBuilder($this->client, $this->requestUrl . '/timevalue');
    }
    /**
     * Navigate to today
     *
     * @return TodayRequestBuilder
     */
    public function today(): TodayRequestBuilder
    {
        return new TodayRequestBuilder($this->client, $this->requestUrl . '/today');
    }
    /**
     * Navigate to trim
     *
     * @return TrimRequestBuilder
     */
    public function trim(): TrimRequestBuilder
    {
        return new TrimRequestBuilder($this->client, $this->requestUrl . '/trim');
    }
    /**
     * Navigate to trimMean
     *
     * @return TrimMeanRequestBuilder
     */
    public function trimMean(): TrimMeanRequestBuilder
    {
        return new TrimMeanRequestBuilder($this->client, $this->requestUrl . '/trimMean');
    }
    /**
     * Navigate to true
     *
     * @return TrueModelRequestBuilder
     */
    public function trueModel(): TrueModelRequestBuilder
    {
        return new TrueModelRequestBuilder($this->client, $this->requestUrl . '/true');
    }
    /**
     * Navigate to trunc
     *
     * @return TruncRequestBuilder
     */
    public function trunc(): TruncRequestBuilder
    {
        return new TruncRequestBuilder($this->client, $this->requestUrl . '/trunc');
    }
    /**
     * Navigate to type
     *
     * @return TypeRequestBuilder
     */
    public function type(): TypeRequestBuilder
    {
        return new TypeRequestBuilder($this->client, $this->requestUrl . '/type');
    }
    /**
     * Navigate to unichar
     *
     * @return UnicharRequestBuilder
     */
    public function unichar(): UnicharRequestBuilder
    {
        return new UnicharRequestBuilder($this->client, $this->requestUrl . '/unichar');
    }
    /**
     * Navigate to unicode
     *
     * @return UnicodeRequestBuilder
     */
    public function unicode(): UnicodeRequestBuilder
    {
        return new UnicodeRequestBuilder($this->client, $this->requestUrl . '/unicode');
    }
    /**
     * Navigate to upper
     *
     * @return UpperRequestBuilder
     */
    public function upper(): UpperRequestBuilder
    {
        return new UpperRequestBuilder($this->client, $this->requestUrl . '/upper');
    }
    /**
     * Navigate to usdollar
     *
     * @return UsdollarRequestBuilder
     */
    public function usdollar(): UsdollarRequestBuilder
    {
        return new UsdollarRequestBuilder($this->client, $this->requestUrl . '/usdollar');
    }
    /**
     * Navigate to value
     *
     * @return ValueRequestBuilder
     */
    public function value(): ValueRequestBuilder
    {
        return new ValueRequestBuilder($this->client, $this->requestUrl . '/value');
    }
    /**
     * Navigate to var_P
     *
     * @return VarPRequestBuilder
     */
    public function varP(): VarPRequestBuilder
    {
        return new VarPRequestBuilder($this->client, $this->requestUrl . '/var_P');
    }
    /**
     * Navigate to var_S
     *
     * @return VarSRequestBuilder
     */
    public function varS(): VarSRequestBuilder
    {
        return new VarSRequestBuilder($this->client, $this->requestUrl . '/var_S');
    }
    /**
     * Navigate to varA
     *
     * @return VarARequestBuilder
     */
    public function varA(): VarARequestBuilder
    {
        return new VarARequestBuilder($this->client, $this->requestUrl . '/varA');
    }
    /**
     * Navigate to varPA
     *
     * @return VarPARequestBuilder
     */
    public function varPA(): VarPARequestBuilder
    {
        return new VarPARequestBuilder($this->client, $this->requestUrl . '/varPA');
    }
    /**
     * Navigate to vdb
     *
     * @return VdbRequestBuilder
     */
    public function vdb(): VdbRequestBuilder
    {
        return new VdbRequestBuilder($this->client, $this->requestUrl . '/vdb');
    }
    /**
     * Navigate to vlookup
     *
     * @return VlookupRequestBuilder
     */
    public function vlookup(): VlookupRequestBuilder
    {
        return new VlookupRequestBuilder($this->client, $this->requestUrl . '/vlookup');
    }
    /**
     * Navigate to weekday
     *
     * @return WeekdayRequestBuilder
     */
    public function weekday(): WeekdayRequestBuilder
    {
        return new WeekdayRequestBuilder($this->client, $this->requestUrl . '/weekday');
    }
    /**
     * Navigate to weekNum
     *
     * @return WeekNumRequestBuilder
     */
    public function weekNum(): WeekNumRequestBuilder
    {
        return new WeekNumRequestBuilder($this->client, $this->requestUrl . '/weekNum');
    }
    /**
     * Navigate to weibull_Dist
     *
     * @return WeibullDistRequestBuilder
     */
    public function weibullDist(): WeibullDistRequestBuilder
    {
        return new WeibullDistRequestBuilder($this->client, $this->requestUrl . '/weibull_Dist');
    }
    /**
     * Navigate to workDay
     *
     * @return WorkDayRequestBuilder
     */
    public function workDay(): WorkDayRequestBuilder
    {
        return new WorkDayRequestBuilder($this->client, $this->requestUrl . '/workDay');
    }
    /**
     * Navigate to workDay_Intl
     *
     * @return WorkDayIntlRequestBuilder
     */
    public function workDayIntl(): WorkDayIntlRequestBuilder
    {
        return new WorkDayIntlRequestBuilder($this->client, $this->requestUrl . '/workDay_Intl');
    }
    /**
     * Navigate to xirr
     *
     * @return XirrRequestBuilder
     */
    public function xirr(): XirrRequestBuilder
    {
        return new XirrRequestBuilder($this->client, $this->requestUrl . '/xirr');
    }
    /**
     * Navigate to xnpv
     *
     * @return XnpvRequestBuilder
     */
    public function xnpv(): XnpvRequestBuilder
    {
        return new XnpvRequestBuilder($this->client, $this->requestUrl . '/xnpv');
    }
    /**
     * Navigate to xor
     *
     * @return XorModelRequestBuilder
     */
    public function xorModel(): XorModelRequestBuilder
    {
        return new XorModelRequestBuilder($this->client, $this->requestUrl . '/xor');
    }
    /**
     * Navigate to year
     *
     * @return YearRequestBuilder
     */
    public function year(): YearRequestBuilder
    {
        return new YearRequestBuilder($this->client, $this->requestUrl . '/year');
    }
    /**
     * Navigate to yearFrac
     *
     * @return YearFracRequestBuilder
     */
    public function yearFrac(): YearFracRequestBuilder
    {
        return new YearFracRequestBuilder($this->client, $this->requestUrl . '/yearFrac');
    }
    /**
     * Navigate to yield
     *
     * @return YieldModelRequestBuilder
     */
    public function yieldModel(): YieldModelRequestBuilder
    {
        return new YieldModelRequestBuilder($this->client, $this->requestUrl . '/yield');
    }
    /**
     * Navigate to yieldDisc
     *
     * @return YieldDiscRequestBuilder
     */
    public function yieldDisc(): YieldDiscRequestBuilder
    {
        return new YieldDiscRequestBuilder($this->client, $this->requestUrl . '/yieldDisc');
    }
    /**
     * Navigate to yieldMat
     *
     * @return YieldMatRequestBuilder
     */
    public function yieldMat(): YieldMatRequestBuilder
    {
        return new YieldMatRequestBuilder($this->client, $this->requestUrl . '/yieldMat');
    }
    /**
     * Navigate to z_Test
     *
     * @return ZTestRequestBuilder
     */
    public function zTest(): ZTestRequestBuilder
    {
        return new ZTestRequestBuilder($this->client, $this->requestUrl . '/z_Test');
    }
}
