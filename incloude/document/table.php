<?php

    class Obj {
        public $title;
        public $inputtype;
        public $inputname;
        public $dbfile;
        public $inputvalue;
    }

    function Filed($title, $inputtype, $inputname, $dbfile, $inputvalue = null) {
        $s = new Obj();

        $s->title = $title;
        $s->inputtype = $inputtype;
        $s->inputname = $inputname;
        $s->dbfile = $dbfile;
        $s->inputvalue = $inputvalue;

        return $s;
    }

    // $b = new Filed();

    // echo $b->create($title, $inputtype, $inputname, $dbfile)->title;

    $cols = array(
        // Filed($title, $inputtype, $inputname, $dbfile,  $inputvalue),
        Filed("م", 'submit', 'add', 'id', 'اضف'),
        Filed("اليوم", 'text', 'theday', 'theday'),
        Filed("التاريخ", 'date', 'thedate', 'thedate'),
        Filed("اسم العميل", 'text', 'cumpname', 'cumpname'),
        Filed("نوع الصناعه", 'text', 'besnestype', 'besnestype'),
        Filed("العنوان", 'text', 'location', 'location'),
        Filed("اسم المسئول", 'text', 'custname', 'custname'),
        Filed("رقم الهاتف", 'text', 'phone', 'phone'),
        Filed("الايميل", 'text', 'email', 'email'),

        Filed("التشغيل", 'checkbox', 'tspeple', 'tspeple'),
        Filed("يونيفورم", 'checkbox', 'tsuniform', 'tsuniform'),
        Filed("اخرى", 'text', 'tsother', 'tsother'),

        Filed("تم الاتصال", 'checkbox', 'resdone', 'resdone'),
        Filed("طلب عرض", 'checkbox', 'resreq', 'resreq'),
        Filed("طلب زياره", 'checkbox', 'resvist', 'resvist'),

        Filed("المتابعه تاريخ", 'date', 'flwdate', 'flwdate'),

        Filed("تم ارسال العرض", 'checkbox', 'res2sent', 'res2sent'),
        Filed("تم الزياره", 'checkbox', 'res2vist', 'res2vist'),
        Filed("تم رفض العرض", 'checkbox', 'res2regect', 'res2regect'),
        Filed("تم قبول العرض", 'checkbox', 'res2accept', 'res2accept'),

        Filed("ملاحظات", 'text', 'notes', 'notes'),
    );
        
    /***************/
    /* output data */
    /***************/

    // table header
    
    echo "<thead><tr>";
    
    foreach($cols as $col) {
        echo "
        <th scope='col'>
            <div class='title text-center'>$col->title</div>
            <div class='field input-group'>
                <input name='$col->inputname' type='$col->inputtype'" ;
                
                if($col->inputtype != 'checkbox') {
                    echo " value='" . $col->inputvalue . "'";
                }
                
                echo " />
                </div>
                </th>";
            }
            
    echo "</tr></thead>";
    // end table
    
    // table header
    $sql = "SELECT * FROM $tablename";
    $res = mysqli_query($conn, $sql);

    if( isset($_POST["filter"]) ){
        $sql = "SELECT * FROM $tablename WHERE thedate = '" . $_POST['filter'] . "'";
        $res = mysqli_query($conn, $sql);
    }
            
    echo "<tbody>";
    if(mysqli_num_rows($res) > 0){
        while($row = mysqli_fetch_assoc($res)) {
            
            echo "<tr>";
            
            foreach($cols as $col) {
                echo "<th scope='row'>";
                echo "<div class='item '>" . $row[$col->dbfile] . "</div>";
                echo "</th>";
            }
     
            echo "</tr>";
        }
    }
    echo "</tbody>";

