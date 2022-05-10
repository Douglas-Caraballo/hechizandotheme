<?php
function post_like(){
    //Check for nonce security
    $nonce= $_POST['nonce'];

    if(!wp_verify_nonce($nonce, 'ajax-nonce'))
        die('Bye bye');

    if(isset($_POST['post_like'])){
        //Retrieve user IP address
        $ip = $_SERVER['REMOTE_ADDR'];
        $post_id = $_POST['post_id'];

        //Get voters'IP for de current post
        $meta_IP = get_post_meta($post_id, "voted_IP");
        $voted_IP = $meta_IP[0];

        if(!is_array($voted_IP))
            $voted_IP = array();

        //Get votes count for the current post
        $meta_count= get_post_meta($post_id, "votes_count", true);

        //Use has already voted
        if(!has_already_voted($post_id)){
            $voted_IP[$ip]= time();

            //Save IP and increase votes count
            update_post_meta($post_id, "voted_IP", $voted_IP);
            update_post_meta($post_id,"votes_count", ++$meta_count);

            //Display count(ie jQuery return value)
            echo $meta_count;
        }else{
            echo "already";
        }
    }
    exit;
}

$timebeforerevote= 3; //time in min

function has_already_voted($post_id){
    global $timebeforerevote;

    //Retrive post votes IPs
    $meta_IP = get_post_meta( $post_id, "voted_IP" );
    $voted_IP= $meta_IP[0];

    if(!is_array($voted_IP))
        $voted_IP =array();

    // Retrive current user IP
    $ip = $_SERVER['REMOTE_ADDR'];

    // If user has already voted
    if(in_array($ip, array_keys($voted_IP))){
        $time= $voted_IP[$ip];
        $now = time();

        //compare between current time and vote time
        if(round(($now-$time)/60)> $timebeforerevote)
            return false;

        return true;
    }
    return false;
}

function get_post_like_link($post_id){
    $themename = "hechizandotheme";

    $vote_count = get_post_meta($post_id, "votes_count", true);

    $output = '<p class="post-like">';
    if(has_already_voted($post_id))
        $output .= ' <span title="'.__('I like this article', $themename).'" class="like alreadyvoted"></span>';
    else
        $output .= '<a href="#" data-post_id="'.$post_id.'">
                    <span  title="'.__('I like this article', $themename).'"class="like"></span>
                </a>';
    $output .= '<span class="count">'.$vote_count.'</span></p>';

    return $output;
}