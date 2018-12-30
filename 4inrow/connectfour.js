let fieldOfPlay=new Array(42);
var turn=0;
var player1=0;
var player2=0;
let tabel;
var winner=0;

window.onload = function()
{
     table = document.querySelectorAll('.square');
     menu = document.querySelectorAll('.endMenu');
    for(var i=0; i<fieldOfPlay.length;i++)
    {
        fieldOfPlay[i]=0;
    }

    table.forEach(cube => cube.addEventListener('click', insertR ));//setup
    var player = document.getElementById('ScoreBoard');

    function insertR()//enter user selected row
    {
      var i;
        for(i=0;i<table.length;i++)
        {
          if(table[i]==this)
          {
            break;
          }//gets index of square pressed
        }

        var index =i;

        while (index<42)
        {
            if(fieldOfPlay[index]==0)
            {
              while(fieldOfPlay[index]==0 && fieldOfPlay[index]<42)
              {
                index+=7;
              }
                index-=7;
                if(turn%2==0)
                  fieldOfPlay[index]=1;
                else {
                  fieldOfPlay[index]=-1;
                }
                changeColor(index,turn);
                turn+=1;
            }
            else { break; }
            index+=7;
        }
        if(turn%2==0)
        {
          player.innerHTML="Red Turn";
        }
        else {
          player.innerHTML="Yellow Turn";
        }
        var res=CheckVictory();
      }



      function changeColor(index,turn)
      {
        if(turn%2==0)
        {
          table[index].style.background ='Crimson';
        }
        else {
          table[index].style.background ='Orange';
        }

        table[index].style.opacity =1;
      }




      function CheckVictory()
      {
        checkln();
        checkrow();
        checkRightCross();
        checkLeftCross();
        CheckDraw();
      }




      function checkln()
      {

        var flag =false;
        var usr;
        for (var i=0;i<7 && !flag ;i++)
        {
          flag=false;
              for(var j=0;j<7 && !flag;j++)
              {
                if(fieldOfPlay[i*7+j]==1 || fieldOfPlay[i*7+j]==-1)
                {
                  usr=fieldOfPlay[i*7+j];
                  for(var k=0;k<=3 ;k++)
                  {
                        res =i*7+j+k;
                        flag = (usr==fieldOfPlay[res]);
                        if(!flag) break;
                  }
                  if(Math.floor((i*7+j)/7)!=Math.floor((i*7+j+3)/7)&&flag)
                  {
                    flag=false;
                  }

                }
              }
        }

        if(flag===true)
        {
          Victory(usr,1);
          return true;
        }
      }
      function checkrow()
      {
        var flag =false;
        var usr;
        for (var i=0;i<7 && !flag ;i++)
        {

            usr = fieldOfPlay[i+j*7];
              for(var j=0;j<6&& !flag;j++)
              {
                usr =fieldOfPlay[i+j*7];
                if(usr==1 || usr==-1)
                {
                  for(var k=0;k<4;k++)
                  {
                    flag= usr === fieldOfPlay[i+j*7+k*7];
                    if(!flag) break;
                  }
                }
              }
        }

        if(flag===true)
        {
          Victory(usr,2);
          return true;
        }
      }
      function checkRightCross()
      {
        var flag =false;
        var usr;

        for(var i=0;i<7 && !flag;i++)
        {
          for(var j=0;j<6 && !flag;j++)
          {
            usr = fieldOfPlay[i+j*7];
            if(usr==1 || usr==-1)
            {
              for(var k=1;k<4;k++)
              {
                if(i+(j+k)*7<42)
                  flag= usr === fieldOfPlay[i+k+(j+k)*7];
                  else {
                    flag =false;
                    break;
                  }
                if(flag==false) break;
              }
            }
          }
        }

        if(flag===true)
        {
          Victory(usr,3);
          return true;
        }
      }
      function checkLeftCross()
      {
        var flag =false;
        var usr;

        for(var i=0;i<7 && !flag;i++)
        {
          for(var j=0;j<6 && !flag;j++)
          {
            usr = fieldOfPlay[i+j*7];
            if( (usr===1 || usr===-1) && usr!=undefined)
            {
              for(var k=0;k<4;k++)
              {
                res=i-k+(j+k)*7;
                if(i+(j+k)*7<42)
                    flag= usr === fieldOfPlay[res];
                    else {
                      flag=false;
                      break;
                    }

                if(flag===false) break;
              }
            }
          }
        }

        if(flag===true)
        {
          Victory(usr,4);
          return true;
        }
        //console.log(usr===fieldOfPlay[res]);
      }


      function Victory(usr,ind)
      {
        var flag=0;
        var player = document.getElementById('ScoreBoard');
        if(usr==0)
        {
          player.innerHTML="Its a Draw!";
          flag=1;
        }
        else if(usr==1)
        {
          player.innerHTML="Red Won !";
          flag=1;
          }

          else {
            player.innerHTML="Yellow Won !";
            flag=1;
          }
        table.forEach(cube => cube.removeEventListener('click', insertR ));
        if(flag)
        {
          winner=usr;
          game = document.querySelectorAll('.box-container');
          game[0].style.opacity="0.5";
          menu[0].style.top="50%";
          menu[0].style.left="50%";
        }
      }

      function CheckDraw()
      {
        var flag=false;
        for(var i=0;i<42 && !flag;i++)
        {
          flag = fieldOfPlay[i]==0;
        }

        if(!flag)
        {
          Victory(0,0);
        }
      }
}

function updateWinner()
{
  x=document.getElementById('save');
  x.value=winner;
}
