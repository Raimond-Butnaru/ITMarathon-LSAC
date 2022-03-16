<style>
    tr:hover
    {
        background-color: #DCDCDC;
    }
table {
    padding: 15px;
    border-collapse: collapse;
    width: 100%;
}

 </style>
<section class="about-faq sec-padd">
        <div class="container">
            <div class="section-title center">
                        <h2>Calendar IT Marathon 2021</h2>
            </div>
            <div class="ui segment">
                <table class="ui celled striped structured table">

                    <tbody class="overlay-box center">

                    <tr>
                        <td><a href="#">Inscrieri</a></td>
                        <td>
                            16 Martie 2022 - 6 Aprilie 2022
                        </td>
                        <td>
                            23:59
                        </td>
                        <td>
                            <div id="countbox11"></div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Deschidere</a></td>
                        <td>
                            11 Aprilie 2022
                        </td>
                        <td>
                             10:00
                        </td>
                        <td>
                            <div id="countbox88"></div>
                        </td>
                    </tr>
                                        
				    <tr>
                        <td><a href="http://itmarathon.lsaciasi.ro/infoit.php" target="_blank">Info IT</a></td>
                        <td>
                            11 Aprilie 2021 - 15 Aprilie 2022
                        </td>
                        <td>
                            10:00
                        </td>
                        <td>
                            <div id="countbox99"></div>
                        </td>
                    </tr>

                    <tr>
                        <td><a href="http://itmarathon.lsaciasi.ro/junior.php" target="_blank">Junior Dev</a></td>
                        <td>
                            16 Aprilie 2022
                        </td>
                        <td>
                            10:00
                        </td>
                        <td>
                            <div id="countbox33"></div>
                        </td>
                    </tr>
					

                    <tr>
                        <td><a href="http://itmarathon.lsaciasi.ro/web.php" target="_blank">Web Development</a></td>
                        <td>
                            16 Aprilie 2022
                        </td>
                        <td>
                            10:00
                        </td>
                        <td>
                            <div id="countbox77"></div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="http://itmarathon.lsaciasi.ro/embedded.php" target="_blank">Design</a></td>
                        <td>
                            16 Aprilie 2022
                        </td>
                        <td>
                            10:00
                        </td>
                        <td>
                            <div id="countbox44"></div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="http://itmarathon.lsaciasi.ro/desktop.php" target="_blank">Desktop&Mobile Applications</a></td>
                        <td>
                            17 Aprilie 2022
                        </td>
                        <td>
                            10:00
                        </td>
                        <td>
                            <div id="countbox55"></div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="http://itmarathon.lsaciasi.ro/desktop.php" target="_blank">Proba surpriză</a></td>
                        <td>
                            17 Aprilie 2022
                        </td>
                        <td>
                            10:00
                        </td>
                        <td>
                            <div id="countbox55"></div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="ui container"></div>
        </div>
    </section>
    <script>
        var CDown = function(messaj) {
            this.state=0;
            this.counts=[];
            this.message = messaj;
            this.interval=null;
        };
        CDown.prototype = {
            init: function(){
                this.state=1;
                var self=this;
                this.interval=window.setInterval(function(){self.tick();}, 1000);
            },
            add: function(date,id){
                this.counts.push({d:date,id:id});
                this.tick();
                if(this.state==0) this.init();
            },
            expire: function(idxs){
                for(var x in idxs) {
                    this.display(this.counts[idxs[x]], this.message);
                    this.counts.splice(idxs[x], 1);
                }
            },
            format: function(r){
                var out="";
                if(r.d != 0){out += r.d +" "+((r.d==1)?"<span>zi</span>":"<span>zile</span>")+"  ";}
                if(r.h != 0){out += r.h +" "+((r.h==1)?"<span>ora</span>":"<span>ore</span>")+"  ";}
                out += r.m +" "+((r.m==1)?"<span>minut</span>":"<span>minute</span>")+"  ";


                return out.substr(0,out.length-2);
            },
            math: function(work){
                var	y=w=d=h=m=s=ms=0;

                ms=(""+((work%1000)+1000)).substr(1,3);
                work=Math.floor(work/1000);

                y=Math.floor(work/31536000);
                w=Math.floor(work/604800);
                d=Math.floor(work/86400);
                work=work%86400;
                
                h=Math.floor(work/3600);
                work=work%3600;

                m=Math.floor(work/60);
                work=work%60;

                s=Math.floor(work);

                return {y:y,w:w,d:d,h:h,m:m,s:s,ms:ms};
            },
            tick: function(){
                var now=(new Date()).getTime(),
                        expired=[],cnt=0,amount=0;

                if(this.counts)
                    for(var idx=0,n=this.counts.length; idx<n; ++idx){
                        cnt=this.counts[idx];
                        amount=cnt.d.getTime()-now;
                        if(amount<0){
                            expired.push(idx);
                        }
                        else{
                            this.display(cnt, this.format(this.math(amount)));
                        }
                    }

                // deal with any expired
                if(expired.length>0) this.expire(expired);

                // if no active counts, stop updating
                if(this.counts.length==0) window.clearTimeout(this.interval);

            },
            display: function(cnt,msg){
                document.getElementById(cnt.id).innerHTML=msg;
            }
        };

        window.onload=function(){
            var cdown1 = new CDown("Inscrierile au  sfarsit!");
            cdown1.add(new Date(2021,5,25,0,0,0), "countbox1");

            var cdown2 = new CDown("DIY a luat sfarsit!");
            cdown2.add(new Date(2021,5,29,0,0,0), "countbox2");

            var cdown3 = new CDown("Junior Dev a luat sfarsit!");
            cdown3.add(new Date(2021,5,24,10,0,0), "countbox3");

            var cdown4 = new CDown("Design a luat sfarsit!");
            cdown4.add(new Date(2021,5,25,10,0,0), "countbox4");

            var cdown5 = new CDown("Desktop&Mobile Applications a luat sfarsit!");
            cdown5.add(new Date(2021,5,25,18,0,0), "countbox5");

            var cdown6 = new CDown("Mobile Apps a luat sfarsit!");
            cdown6.add(new Date(2021,4,4,10,0,0), "countbox6");

            var cdown7 = new CDown("Web Development e in desfășurare!");
            cdown7.add(new Date(2021,5,24,18,0,0), "countbox7");

            var cdown8 = new CDown("");
            cdown8.add(new Date(2021,5,24,14,0,0), "countbox8");

			var cdown9 = new CDown("");
            cdown9.add(new Date(2021,5,24,0,0,0), "countbox9");

			var cdown10 = new CDown("");
            cdown10.add(new Date(2018,3,20,0,0,0), "countbox10");
        };
    </script>