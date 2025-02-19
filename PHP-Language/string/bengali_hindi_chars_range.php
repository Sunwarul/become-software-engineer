<?php

mb_internal_encoding('UTF-8');

function mb_range($start, $end)
{
    // if start and end are the same, well, there's nothing to do
    if ($start == $end) {
        return array($start);
    }

    $_result = array();
    // get unicodes of start and end
    list(, $_start, $_end) = unpack("N*", mb_convert_encoding($start . $end, "UTF-32BE", "UTF-8"));
    // determine movement direction
    $_offset = $_start < $_end ? 1 : -1;
    $_current = $_start;
    while ($_current != $_end) {
        $_result[] = mb_convert_encoding(pack("N*", $_current), "UTF-8", "UTF-32BE");
        $_current += $_offset;
    }
    $_result[] = $end;
    return $_result;
}

print_r(mb_range('क', 'म'));
print_r(mb_range('ক', 'ঢ়'));

/*

Array
(
    [0] => क
    [1] => ख
    [2] => ग
    [3] => घ
    [4] => ङ
    [5] => च
    [6] => छ
    [7] => ज
    [8] => झ
    [9] => ञ
    [10] => ट
    [11] => ठ
    [12] => ड
    [13] => ढ
    [14] => ण
    [15] => त
    [16] => थ
    [17] => द
    [18] => ध
    [19] => न
    [20] => ऩ
    [21] => प
    [22] => फ
    [23] => ब
    [24] => भ
    [25] => म
)

Array
(
    [0] => ক
    [1] => খ
    [2] => গ
    [3] => ঘ
    [4] => ঙ
    [5] => চ
    [6] => ছ
    [7] => জ
    [8] => ঝ
    [9] => ঞ
    [10] => ট
    [11] => ঠ
    [12] => ড
    [13] => ঢ
    [14] => ণ
    [15] => ত
    [16] => থ
    [17] => দ
    [18] => ধ
    [19] => ন
    [20] => ঩
    [21] => প
    [22] => ফ
    [23] => ব
    [24] => ভ
    [25] => ম
    [26] => য
    [27] => র
    [28] => ঱
    [29] => ল
    [30] => ঳
    [31] => ঴
    [32] => ঵
    [33] => শ
    [34] => ষ
    [35] => স
    [36] => হ
    [37] => ঺
    [38] => ঻
    [39] => ়
    [40] => ঽ
    [41] => া
    [42] => ি
    [43] => ী
    [44] => ু
    [45] => ূ
    [46] => ৃ
    [47] => ৄ
    [48] => ৅
    [49] => ৆
    [50] => ে
    [51] => ৈ
    [52] => ৉
    [53] => ৊
    [54] => ো
    [55] => ৌ
    [56] => ্
    [57] => ৎ
    [58] => ৏
    [59] => ৐
    [60] => ৑
    [61] => ৒
    [62] => ৓
    [63] => ৔
    [64] => ৕
    [65] => ৖
    [66] => ৗ
    [67] => ৘
    [68] => ৙
    [69] => ৚
    [70] => ৛
    [71] => ড়
    [72] => ঢ়
)
 */