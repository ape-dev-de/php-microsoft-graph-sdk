<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintFinishing - Enum
 */
enum PrintFinishing: string
{
    case NONE = 'none';
    case STAPLE = 'staple';
    case PUNCH = 'punch';
    case COVER = 'cover';
    case BIND = 'bind';
    case SADDLESTITCH = 'saddleStitch';
    case STITCHEDGE = 'stitchEdge';
    case STAPLETOPLEFT = 'stapleTopLeft';
    case STAPLEBOTTOMLEFT = 'stapleBottomLeft';
    case STAPLETOPRIGHT = 'stapleTopRight';
    case STAPLEBOTTOMRIGHT = 'stapleBottomRight';
    case STITCHLEFTEDGE = 'stitchLeftEdge';
    case STITCHTOPEDGE = 'stitchTopEdge';
    case STITCHRIGHTEDGE = 'stitchRightEdge';
    case STITCHBOTTOMEDGE = 'stitchBottomEdge';
    case STAPLEDUALLEFT = 'stapleDualLeft';
    case STAPLEDUALTOP = 'stapleDualTop';
    case STAPLEDUALRIGHT = 'stapleDualRight';
    case STAPLEDUALBOTTOM = 'stapleDualBottom';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case STAPLETRIPLELEFT = 'stapleTripleLeft';
    case STAPLETRIPLETOP = 'stapleTripleTop';
    case STAPLETRIPLERIGHT = 'stapleTripleRight';
    case STAPLETRIPLEBOTTOM = 'stapleTripleBottom';
    case BINDLEFT = 'bindLeft';
    case BINDTOP = 'bindTop';
    case BINDRIGHT = 'bindRight';
    case BINDBOTTOM = 'bindBottom';
    case FOLDACCORDION = 'foldAccordion';
    case FOLDDOUBLEGATE = 'foldDoubleGate';
    case FOLDGATE = 'foldGate';
    case FOLDHALF = 'foldHalf';
    case FOLDHALFZ = 'foldHalfZ';
    case FOLDLEFTGATE = 'foldLeftGate';
    case FOLDLETTER = 'foldLetter';
    case FOLDPARALLEL = 'foldParallel';
    case FOLDPOSTER = 'foldPoster';
    case FOLDRIGHTGATE = 'foldRightGate';
    case FOLDZ = 'foldZ';
    case FOLDENGINEERINGZ = 'foldEngineeringZ';
    case PUNCHTOPLEFT = 'punchTopLeft';
    case PUNCHBOTTOMLEFT = 'punchBottomLeft';
    case PUNCHTOPRIGHT = 'punchTopRight';
    case PUNCHBOTTOMRIGHT = 'punchBottomRight';
    case PUNCHDUALLEFT = 'punchDualLeft';
    case PUNCHDUALTOP = 'punchDualTop';
    case PUNCHDUALRIGHT = 'punchDualRight';
    case PUNCHDUALBOTTOM = 'punchDualBottom';
    case PUNCHTRIPLELEFT = 'punchTripleLeft';
    case PUNCHTRIPLETOP = 'punchTripleTop';
    case PUNCHTRIPLERIGHT = 'punchTripleRight';
    case PUNCHTRIPLEBOTTOM = 'punchTripleBottom';
    case PUNCHQUADLEFT = 'punchQuadLeft';
    case PUNCHQUADTOP = 'punchQuadTop';
    case PUNCHQUADRIGHT = 'punchQuadRight';
    case PUNCHQUADBOTTOM = 'punchQuadBottom';
    case FOLD = 'fold';
    case TRIM = 'trim';
    case BALE = 'bale';
    case BOOKLETMAKER = 'bookletMaker';
    case COAT = 'coat';
    case LAMINATE = 'laminate';
    case TRIMAFTERPAGES = 'trimAfterPages';
    case TRIMAFTERDOCUMENTS = 'trimAfterDocuments';
    case TRIMAFTERCOPIES = 'trimAfterCopies';
    case TRIMAFTERJOB = 'trimAfterJob';
}
