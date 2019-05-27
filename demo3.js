const scanf=require('scanf');
// console.log('请输入两个数，计算两个数的和：请按回车继续');
// scanf('%d');
// console.log('输入a:');
// let a=scanf('%d');
// console.log('输入b:');
// let b=scanf('%d');
// let c=a+b;
// console.log('拼接a+b='+a+b);
// console.log('a+b=c='+c);
// console.log('a+b='+(a+b));

// const scanf=require('scanf');
// console.log('请输入名字以及另外一个名字，按回车继续');
// scanf('%s');
// console.log('请输入第一个名字');
// let a=scanf('%s');
// console.log('请输入第二个名字');
// let b=scanf('%s');
// let c=a&b;
// console.log('拼接a+b='+a&b);
// console.log('a+b=c='+c);
// console.log('a+b='+(a&b));



// console.log('欢迎进入坐标管理系统');//启动logo
                                    
// async function main(){ //对函数内代码进行封装
//     let arr=[];
//     while(1){
//             console.log('1---添加一个幸运数字');
//             console.log('2---显示全部数字');
//             console.log('3---删除最后一个数字');
//             console.log('4---退出');
//             let con=scanf('%d');  //输入一个数字
//                 if(con===1){
//                 console.log('1---添加一个幸运数字');
//                 let x=scanf('%d');
//                 arr.push(x);
//                 console.log('添加成功');
//                 console.log('按回车继续');
//                 scanf('%d');
//                 }
//             if(con===2){
//                 console.log('2---显示全部数字');
              
//                 for(let i=0;i<arr.length;i++){
                   
//                     console.log((arr[i]));
//                 }
//             }
//             if(con===3){
//                 console.log('3---删除最后一个数字');
//                 arr.pop();
//                 console.log('删除成功');
//                 scanf('%d');
//             };
//         if(con===4){
//             console.log('退出');
//             break;
//         }
//                 }
//             }
//             main();
// console.log('欢迎进入坐标管理系统');//启动logo
                                    
// async function main(){ //对函数内代码进行封装
//     let arr=[];
//     while(1){
//             console.log('1---添加一个坐标');
//             console.log('2---显示全部坐标');
//             console.log('3---删除最后一个坐标');
//             console.log('4---退出');
//             let con=scanf('%d');  //输入一个数字
//                 if(con===1){
//                 console.log('1---添加一个坐标');
//                 console.log('添加x坐标');
//                 let x=scanf('%d');
//                 console.log('添加y坐标');
//                 let y=scanf('%d');
//                 console.log('添加成功');
//                 console.log('按回车继续');
//                 scanf('%d');
//                 let zuobiao={
//                     'x':x,
//                     'y':y
//                 };
//                 arr.push(zuobiao);
//                  console.log('添加成功');
//                  console.log('按回车继续');
//                 }


//             if(con===2){
//                 console.log('2---显示全部坐标');
               

//                 for(let i=0;i<arr.length;i++){
//                     let lbq=arr[i];
//                     console.log(`坐标为(${lbq.x},${lbq.y})`);
//                 }
//                 console.log('点击回车继续');
//                 scanf('%d');
//             }

//             if(con===3){
//                 console.log('3---删除最后一个数字');
//                 arr.pop();
//                 console.log('删除成功');
//                 scanf('%d');
//             };
//         if(con===4){
//             console.log('退出');
//             break;
//         }
//                 }
//             }
//             main();
console.log('欢迎进学生成绩系统');
let arr=[];
while(1){
    console.log('1---添加一个学生学科成绩');
    console.log('2---显示全部学生学科成绩');
    console.log('3---删除最后一个学生学科成绩');
    console.log('4---退出');
    let con=scanf('%d'); 
    if(con===1){
        console.log('1---添加一个学生学科成绩');
        console.log('请输入学生姓名：');
        let xingming=scanf('%s');
        console.log('请输入物理成绩：');
        let wuli=scanf('%d');
        console.log('请输入生物成绩：');
        let shengwu=scanf('%d');
        let student={
            'xingming':xingming,
            'yuwen':wuli,
            'shuxue':shengwu
        };
        arr.push(student);  
        console.log('添加成绩成功');
        scanf('%d');
    }
    if(con===2){
        console.log('2---显示全部学生学科成绩');
        for(let i=0;i<arr.length;i++){
            let lbq=arr[i];
            console.log(`学生：${lbq.xingming}\n语文：${lbq.yuwen}\n数学：${lbq.shuxue}`);
        }
        console.log('点击回车继续');
        scanf('%d');
    }
    if(con===3){
        console.log('3---删除最后一个学生学科成绩');
        arr.pop(); 
        console.log('删除最后一名学生成绩成功');
        scanf('%d');
    }
    if(con===4){
        console.log('退出');
        break;
    }
}