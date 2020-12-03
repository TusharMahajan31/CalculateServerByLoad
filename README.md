# CalculateServerByLoad

Calculate server (N) used as per available application load in each 5 minutes of interval.

This script work with cli.
here is the example to execute it.
Please copy - paster below comand to your terminal location/drive where you copied this script.

# php FindServerByLoad.php 2 10,60,50,15,20,55,65,70,20,51

Here first argument is 2 ( which is number of servers)
and 2nd argument is comma seperated values of load (basically array)

Now, load for each 5 minutes of interval:
1st 5 minute, load is 20 and 2nd 5 minute load is 51.

Following will be output
# For load :: 20, used server : 1
# For load :: 51, used server : 5
