$file="demofile.txt";
$linecount = 0;
$handle = fopen($file, "r");
while(!feof($handle)){
  $line = fgets($handle);
  $linecount++;
}
$data = file($file);
$line = $data[count($data)-1];
$user_details = split(',',$line);
 
 // to do
$diff_lst = []
for n in range(num_lines-1):
    with open('demofile.txt', 'r') as f:
        lines = f.read().splitlines()
        nth_line = lines[n]
        nth_line = nth_line.split(',')
        sub_lst = []
        for j in range(2,len(nth_line)):
            sub_lst.append(abs(int(user_details[j])-int(nth_line[j])))
        diff_lst.append(sub_lst)  

sum_diff_lst = []
for i in diff_lst:
    sum_diff_lst.append(sum(i))

min_diff = min(sum_diff_lst)
min_diff_index = sum_diff_lst.index(min_diff)

best_friend = lines[min_diff_index]
print(best_friend)
