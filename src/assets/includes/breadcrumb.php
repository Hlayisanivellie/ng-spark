<style>
    .bread-links {
        display: flex;
        gap: 10px;
        justify-content: end;
        
        color: #1F4650;
    }
    .bread-links  p{font-size: 16px;}

    .bread-links a {
        color: #1F4650;
        text-decoration: none;
        font-weight: 400;
        transition: all .3s ease-in-out;
        margin-right: 4px;
    }

    .bread-links a:last-of-type {
        color: #54DADF;
        margin-right: 0;
        margin-left: 4px;
        font-weight: 700;
    }

    .bread-links a:hover{
        color: #54DADF;
        transform: scale(1.01);
    }

    .bread-links a:last-of-type:hover {
        color: #1F4650;
    }

    @media screen and (max-width:991px){
        .bread-links {font-size: 14px;}
    }
</style>

<div class="py-3">
    <div class="container">
        <div class="text-end bread-links">
        <?php
        if($section != $pageTitle){
		$section=ucfirst(strtolower($section));
			ucfirst(strtolower($section));
			if($section =='Esg')
			{
				$section ='ESG';
			}
			if(empty($section))
			{
				 $breadDisplay = "<p class='mb-0'><a href='index.php'>Home </a> | <a  class='last-link'>$pageTitle </a></p>";
			}
			else
			{
			
            	$breadDisplay = "<p class='mb-0'><a href='index.php'>Home </a> | <span>".$section."</span> |<a  class='last-link'>$pageTitle </a></p>";
			}
        }
        else{
            $breadDisplay = "<p><a href='index.php'>Home </a> | <a class='last-link'> $pageTitle </a></p>";
        }
        echo $breadDisplay;
        ?>
 
        </div>
    </div>

</div>