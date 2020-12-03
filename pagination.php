<?php if($current_page > 2){
        $first_page = 1;
?>
        <a class="num_page" style="padding: 4px 12px 4px 12px;
    border: 1px solid black;
    margin: 10px 10px 10px 0px;
    width: 50px;
    height: 35px;" href="?per_page=<?=$item_per_page?>&page=<?=$first_page?>">First</a>
<?php }?>


<?php for($i=1;$i<=$totalPage;$i++){?>
        <?php if($i != $current_page){?>
                <?php if($i > $current_page-2 && $i < $current_page +2){?>
                <a class="num_page" style="padding: 4px 12px 4px 12px;
    border: 1px solid black;
    margin: 10px 10px 10px 0px;
    width: 35px;
    height: 35px;" href="?per_page=<?=$item_per_page?>&page=<?=$i?>"><?=$i?></a>
                <?php }?>
        <?php }else{?>
                <strong class="current_page"
                        style="padding: 4px 12px 4px 12px;
    border: 1px solid black;
    margin: 10px 10px 10px 0px;
    width: 35px;
    height: 35px;"
                ><?=$i?></strong>
        <?php }?>
<?php } ?>

<?php if($current_page < $totalPage - 1){
        $end_page = $totalPage;
?>
        <a class="num_page" style="padding: 4px 12px 4px 12px;
    border: 1px solid black;
    margin: 10px 10px 10px 0px;
    width: 50px;
    height: 35px;" href="?per_page=<?=$item_per_page?>&page=<?=$end_page?>">Last</a>
<?php }?>
