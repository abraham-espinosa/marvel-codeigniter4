function solution(A) {
    // Sort A
    sortA = A.sort();

    for(i=0; i > sortA.length; i++){
        if(sortA[i] < 1){
            return 1;
        } else {
            if (sortA[i]+1 != sortA[i+1]){
                return sortA[i]+1;
            } 
        }
    }

}
arrayNum = [1,2,4];
console.log(sultion(arrayNum));