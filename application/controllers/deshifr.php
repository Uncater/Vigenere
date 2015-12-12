<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Deshifr extends CI_Controller {

    function nod($a, $b) {
        for ($i = $a; $i > 1; --$i) {
            if (($a % $i == 0) AND ( $b % $i == 0)) {
                $mass = $i;
                return $mass;
            }
        }
        if (isset($mass)) {

        }
    }

    public function index() {
        $text1     = "Kirill 1 ";
        //$text = "kccgv oy ppiwusc yspt grwmpv tajwii, an hivem asxawpp kg ush maatrèiw wxtywl pw nwfa. lvjy xw kzy recuoaekgl, llzub ivrfmusiem trkwlth kwri (ieulntk gl sitjsex) lkcck maatrvjy rmgzyg. xyw uakfjcild am fyzly hmdhft. zzyycèvv ucelvj ch xyw mtulwhri fx wpijsl rmgzygw nanw hzxztvvfn ivrfmusieuimffm (gskp, mti tsyhei ucelvj). zdv vpubtcw, zxvjl ftxkwl dj kwri mj llprjxigqvv ohmey ldx5, jwwdru - mmxrx jii17, ik uyiiis. nwi jwkjieuy xw uwzxrvv vn ovqqdvu, obtvv wurl cwniii vyumewm civvys wyazi. tyjuhi cwgdr, wgl tbrejai, uwzxrvk nwi jwkjieuy dj ign11-gsk4-jii12-vfl14-ldx13, nzcrl zk lttvsnth lfnxp rdf qpfue dj kwri mj whrvphnth. rk qxozhysmr lyapj mm, xx zk u hmdhft jfjg dj ggfnechbpfvlcr wltmimkmnxse. lbt muwu qiyahs xyw pxkvfèlt gzhbtv, caet ecd jdppsfelrtyimt ucelvjm, xw kg xxwxmchi gduxrkwri pvlntv wjyfyvfwxij, obxgy ahiiixygij ocil r kngezybijfjqpvu sjepzuuimff iu jiwkjieus prrdshmj. xig meknprtw, cu t zk nwi dgmi jiwkjiel ftxkwl xr r ucelvjntbk obdwv hfpmelymx zk cc ieyfxwy, ght qzybi wlkjtgk lbpx g uigvvkjdruk nd i, swwpyjw y xw kzy bsjl zgihmycxcq ohiu dyixvj cc ieyfxwy. zilimwl, jwzfa ilv ncvieèjy rmgzyg, i tsh qi vfwxtywlth rk xxjwwltrk ucelvjntbk dyixvjm px uazuiiwhi tfahiw zf nwi dwmhexw, nwyj vyuirlcck jagepv xltulwhrc rfuacjam. ilv hlxqrjs lirchtwj gz ilv ncvieèjy rmgzyg mj lbt vvhypxzfa cekmlt sw anh ovq. cu e tjsexrfuacjl wdviwwipp yotwjwm ilv cyn'w cwhvxy, lbtr kzy rmgzyg xvpn ree ty ivvsnth rk ccxvjqdzvf wpijsl rmgzygw, nzcrl zfxxzzvoppcq ugi vsmxpp tldovf. nwi imhcmey etc mslxeel iu xyw pxkvfèlt gzhbtv nsm ppjg wdrjaxtvvv ocfiwuzesdy px ffy imdw. nwmj nygwzgh jwvk uh xyw etc r tfdgb gz iiol uh pffa pw kzy eprahiiol. nwi gjiqpve qxxy lbt vlfhxrx cyn zzyycèvv ucelvj ch xysn ilv ulntkshpppkn wej knpxzknxgrd ccjfjgpxzgh pffmn ilv cyn (ejkobmey nwek lbt fcgwz sw lymx zk cc e bfilr cshvyryy) pru lbpx zfzdvdsnxse ocap sw ltjcwwiiu ah ilv ucelvjntbk. az jwzfa p ovq qwmtz ch ximfn vrfxdq, zk ui pvsmi ej dick rk nwi vfwgcglys qvkmpkv shs mj mmth fffn seuy, ilv ncvieèjy rmgzyg mj lbtsiwnxgrdfn yetltebsvai. ygqtzvj, cc xyam rejw ci mj lbt ovq, hdx kzy rmgzyg, ayaww tigpxhvk wgcglivvrhbxg jlltrxlb pru korl jqmiidk ugi gjieiids giwwlgiu li rscdyrxznyac rk ici-kagt trv mnwkwgh, mijyhtvunxzv gz llzub rmgzygw rjy tqgdiniu.";
       // $text      = "ncusfkv rav fvxkzr wlrr yds zsih. yz dlh zx rgl, dru meaiqmkict mrvv; eey tr xzrp oip, ays udd qsk hzz, hh arw r nefseh wvtkii. lv wefedi rn grsu e wmihru, ej borh r qrnthv, rru vs jsfh r haq, ej xyz grsu scy clxp oezw, rv rrp jtkii kfjd rpu gzoy, wsnr, fm brvfyxc, iq xyi xjog sch njroh. jsdz phsgpv gaxkyiu oo viv xyz aoxvvroirr zr ydm, eyk lv gew xyid gaxky, eey llxkpv cehhvh kcep; jfv yz wdw nmjz eqslky oo nrfa kcaw rfxydnj imii castvrvy oq xymj blrfv, jfm grsu, ek rhlgy wfhe siftcz dlh esk cayi klvdr imcp fa ldyxlkzr lr klv juwwvx; rid nrfazig wlrx jpck ej xyzsh afycy bh fcmey aqcnep, ce wlfyxct lx hyzoe dw nicg tkek xyzy vlfycy wumeocz us xyizm ebij me brlrj, ej cayi klv haoeuc zi lhwj ekordgkmmz frvdw. yds rae lvvrw pryxceg: eeh kcaw arw hpiwi vrfpgk jfv ydm. ki yeu io iyixyzr lrkiixoxvji ndtk wgmidtv, flx cdvhh ltfi tki kskvl dfjxzieqgv tidnfmgpv, zvhv rjkzrzeihj; vng mk arn aoarcj nalh fj ydm, wlrx yz kqin lfr tr ovig xhumjxdvs zicp, za aqc dee vllzv tfnshwjiu ohh oesngegkv. qrt tkek fv orxpp wrdd rj lw, rid dpc sw ps! dru wf, vs wmec kdm rfjiiqeg, kfh sgevw lw, vqeuc frv!";
        $text = "UTPDHUG NYH USVKCG МУСЕ FXL KQIB. WX RKU GI TZN, RLS BHZLXMSNP KDKS; СЕВ Ш HKEWIBA, YYM SRB PER SBS, JV UPL О UVADGR HRRWXF. JV ZTVOOV УН ZCQU У UKWGEB, PL UQFB Р FOUKCG, TBF RQ VHCF R KPG, 0U КЕТ ZCQU MAW QKKW ZGSY, ЕР PGM QKETK UQEB DER EZRN, MCYE, MG UCTESVA, WP КЕТ ZCQU MAW KOIJS, LCOV NTHDNV JPNUJVB Ш GGV RWX ONKCGTHKFL XG VKD, ZJM VG CCI MVGD JPNUJ, RLS EWVKJT ASGUCS MVGD; DDK VG NYH PWUV CCHIIY RD DBQN RWTH PFRWBBI VTTK VCGNTGSF FL IAWU XJDUS, HFP VHSF, RR LAWEY QDFS RVMEES FZB СНН JRTT MVGZP UBZN FD ATIIYRTK WP КЕТ HIVJCI; TBF BLDPWPX RWTH ULAW TG VYCHX KQLJS US DCGCW OPPUPR, VG KFDNUJK GI JIKKC PL KGCJ lAOV KFTR GJFSAW KTZLZES WG RWXWT VWTL WP XPXGG, CJ EPOS VYC BTZCUW XG ZGJQ PMHTRAIBJG WMGEG. JZQ DPB JVYGM ZCLEWXR:CEB lAOV NYH JIKKC TGCWXE UHE JZK. WX VCULD YTTKETK WPKCGVCWIQT PWVY QEBFKKQ, QNH NZTTWIREL IAS VERPE ODJRXGSPTC EKWPTGEES, GMCG TTVVPLTEEJ; YCW WV NYH TZYRWH LOKU MU AWO, KEPM VG BLTP VQN RD DSGG AWKWUKKPL KGCJ, XY GPP KPG ONZTT ICUJCHLSE KET DBQHJTWUG. DYN MVCK ZT MEWCW HTWE ED JL, GPU YAE CH LQ! PGR UE, YH MWPP RXE CDJCGOSE, XMS UZGJQJL, SXVPN HBG!";
        $countSimb = 2;
        $text      = str_replace(" ", "", $text);
        $text      = str_replace(".", "", $text);
        $text      = str_replace(",", "", $text);
        $text      = str_replace("(", "", $text);
        $text      = str_replace(")", "", $text);
        $text      = str_replace("!", "", $text);
        $text      = str_replace("-", "", $text);
        $allText   = iconv_strlen($text);
        for ($i = 0; $i < $allText - $countSimb + 1; $i++) {
            $str_tmp = substr($text, $i, $countSimb);
            for ($j = $i + 1; $j < $allText - $countSimb + 1; $j++) {
                $str_tmp2 = substr($text, $j, $countSimb);
                if ($str_tmp == $str_tmp2) {
                    $arr[$str_tmp][] = $j - $i;
                }
            }
        }
//        $max = 0;
//        foreach($arr as $key => $val ){
//           $z = count($val);
//            if ($z > $max) {
//                $max = $z;
//                $chars = $key;
//            }
//        }
////        $elems = count($arr[$chars]);
//        for($i=0; $i < $elems +1; $i++){
//            for($j = $i +1; $j < $elems; $j++){
//             //   echo $arr[$chars][$i] . ' and ' . $arr[$chars][$j].'<br/>';
//                $nod_tmp = $this->nod($arr[$chars][$i], $arr[$chars][$j] );
//                if ($nod_tmp != null) {
//                    $nods[] = $nod_tmp;
//                }
//            }
//
//        }
        //var_dump($arr);
        foreach ($arr as $key => $val) {
            $elems = count($val);
            for ($i = 0; $i < $elems + 1; $i++) {
                for ($j = $i + 1; $j < $elems; $j++) {
                    //   echo $arr[$chars][$i] . ' and ' . $arr[$chars][$j].'<br/>';
                    $nod_tmp = $this->nod($val[$i], $val[$j]);
                    if ($nod_tmp != null) {
                        $nods[] = $nod_tmp;
                    }
                }
            }
        }


        $s = array_count_values($nods);
        arsort($s);
        var_dump($s);
      //  var_dump($arr[$chars]);
    }

}
