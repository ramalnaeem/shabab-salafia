<!-- <?php

include 'conn.php';

// $search = $_GET['عُوْذُ بِکَلِمَاتِ اللّٰہِ التَّآمَّاتِ مِنْ غَضَبِہٖ وَعِقَابِہٖ وَشَرِّ عِبَادِہٖ وَمِنْ ھَمَزَاتِ الشَّیَاطِیْنِ وَاَنْ یَّحْضُرُوْنِ  ’’میں اللہ کے مکمل کلمات کے ذریعے سے پناہ مانگتا ہوں، اس کی ناراضی اور اس کی سزا اور اس کے بندوں کے شر اور شیطانوں کے وسوسہ ڈالنے (گناہوں پر ابھارنے اور اکسانے) سے اور اس بات سے کہ وہ (شیطان) میرے پاس آئیں (اور مجھے بہکائیں۔)‘‘  سنن أبی داود، الطب، باب کیف الرقی؟ حدیث: 3893، وجامع الترمذی، الدعوات، باب: دعاء الفزع فی النو، حدیث: 3528'];
$search = $_GET['search'];


$query = "SELECT * FROM `hadith` WHERE data = '$search'" ;

$result = mysqli_query($conn,$querry);

if(mysqli_num_rows($result) > 0 ) {
    while ($row = mysqli_fetch_assoc($result)){
        echo $row['data'];
    }
}

?> -->