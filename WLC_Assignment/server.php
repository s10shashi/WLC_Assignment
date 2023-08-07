<?php
// There are a number of servers running our application.

// Given N servers, in 5 minutes interval, every minute, the load is checked and if load is
// less than 50%, the servers are either reduced to N/2 else they are increased to
// 2N + 1

// Input : No. of servers (N), server load every minute

// Output : The number of servers running at the end of 5 minutes

// Example:

// Input:
// 2 (2 servers)
// 10 60 50 15 20 (On 1st minute - 10% load, on 2nd minute - 60% load & so on)

// Output:
// 1 (After 5 minute, 1 server is running)

$server = 2;
$load = [10, 60, 50, 15, 20];

//your code here
//

foreach ($load as $curr_load) {
    if ($curr_load < 50) {// if load is less than 50%
        $server = floor($server/2);
        
        if($server < 1){// number of running servers cant be less than 1.. i.e atleat one server should be running all the time
            $server = 1;
        }
    } else {// if load is more than 50%
        $server = 2 * $server + 1;
    }
}

// NOTE:-in line 29 celi function will make more sense here but if i use celi the output will be 2 and it is not clear if the current server count is odd which number we have to take 
// i.e if server count is 3 we should take it 2 or 1 ??



print($server);
?>
