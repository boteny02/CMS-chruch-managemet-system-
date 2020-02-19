<?php $__env->startSection('content'); ?>
<div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <div class="content">
                            <div class="container-fluid">
                              <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                  <div class="card card-stats">
                                    <div class="card-header card-header-warning card-header-icon">
                                      <div class="card-icon">
                                        <i class="material-icons">content_copy</i>
                                      </div>
                                      <p class="card-category">Used Space</p>
                                      <h3 class="card-title">49/50
                                        <small>GB</small>
                                      </h3>
                                    </div>
                                    <div class="card-footer">
                                      <div class="stats">
                                        <i class="material-icons text-danger">warning</i>
                                        <a href="javascript:;">Get More Space...</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                  <div class="card card-stats">
                                    <div class="card-header card-header-success card-header-icon">
                                      <div class="card-icon">
                                        <i class="material-icons">store</i>
                                      </div>
                                      <p class="card-category">Revenue</p>
                                      <h3 class="card-title">$34,245</h3>
                                    </div>
                                    <div class="card-footer">
                                      <div class="stats">
                                        <i class="material-icons">date_range</i> Last 24 Hours
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                  <div class="card card-stats">
                                    <div class="card-header card-header-danger card-header-icon">
                                      <div class="card-icon">
                                        <i class="material-icons">info_outline</i>
                                      </div>
                                      <p class="card-category">Fixed Issues</p>
                                      <h3 class="card-title">75</h3>
                                    </div>
                                    <div class="card-footer">
                                      <div class="stats">
                                        <i class="material-icons">local_offer</i> Tracked from Github
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                  <div class="card card-stats">
                                    <div class="card-header card-header-info card-header-icon">
                                      <div class="card-icon">
                                        <i class="fa fa-twitter"></i>
                                      </div>
                                      <p class="card-category">Followers</p>
                                      <h3 class="card-title">+245</h3>
                                    </div>
                                    <div class="card-footer">
                                      <div class="stats">
                                        <i class="material-icons">update</i> Just Updated
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-4">
                                  <div class="card card-chart">
                                    <div class="card-header card-header-success">
                                      <div class="ct-chart" id="dailySalesChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="40" x2="40" y1="0" y2="119.60000610351562" class="ct-grid ct-horizontal"></line><line x1="60.0750013078962" x2="60.0750013078962" y1="0" y2="119.60000610351562" class="ct-grid ct-horizontal"></line><line x1="80.1500026157924" x2="80.1500026157924" y1="0" y2="119.60000610351562" class="ct-grid ct-horizontal"></line><line x1="100.22500392368862" x2="100.22500392368862" y1="0" y2="119.60000610351562" class="ct-grid ct-horizontal"></line><line x1="120.30000523158482" x2="120.30000523158482" y1="0" y2="119.60000610351562" class="ct-grid ct-horizontal"></line><line x1="140.37500653948103" x2="140.37500653948103" y1="0" y2="119.60000610351562" class="ct-grid ct-horizontal"></line><line x1="160.45000784737724" x2="160.45000784737724" y1="0" y2="119.60000610351562" class="ct-grid ct-horizontal"></line><line y1="119.60000610351562" y2="119.60000610351562" x1="40" x2="180.52500915527344" class="ct-grid ct-vertical"></line><line y1="95.6800048828125" y2="95.6800048828125" x1="40" x2="180.52500915527344" class="ct-grid ct-vertical"></line><line y1="71.76000366210937" y2="71.76000366210937" x1="40" x2="180.52500915527344" class="ct-grid ct-vertical"></line><line y1="47.840002441406256" y2="47.840002441406256" x1="40" x2="180.52500915527344" class="ct-grid ct-vertical"></line><line y1="23.920001220703128" y2="23.920001220703128" x1="40" x2="180.52500915527344" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="180.52500915527344" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M 40 90.896 C 60.075 78.936 60.075 78.936 60.075 78.936 C 80.15 102.856 80.15 102.856 80.15 102.856 C 100.225 78.936 100.225 78.936 100.225 78.936 C 120.3 64.584 120.3 64.584 120.3 64.584 C 140.375 76.544 140.375 76.544 140.375 76.544 C 160.45 28.704 160.45 28.704 160.45 28.704" class="ct-line"></path><line x1="40" y1="90.89600463867188" x2="40.01" y2="90.89600463867188" class="ct-point" ct:value="12" opacity="1"></line><line x1="60.0750013078962" y1="78.93600402832031" x2="60.0850013078962" y2="78.93600402832031" class="ct-point" ct:value="17" opacity="1"></line><line x1="80.1500026157924" y1="102.85600524902344" x2="80.16000261579241" y2="102.85600524902344" class="ct-point" ct:value="7" opacity="1"></line><line x1="100.22500392368862" y1="78.93600402832031" x2="100.23500392368862" y2="78.93600402832031" class="ct-point" ct:value="17" opacity="1"></line><line x1="120.30000523158482" y1="64.58400329589844" x2="120.31000523158482" y2="64.58400329589844" class="ct-point" ct:value="23" opacity="1"></line><line x1="140.37500653948103" y1="76.54400390625" x2="140.38500653948103" y2="76.54400390625" class="ct-point" ct:value="18" opacity="1"></line><line x1="160.45000784737724" y1="28.704001464843756" x2="160.46000784737723" y2="28.704001464843756" class="ct-point" ct:value="38" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="124.60000610351562" width="20.075001307896205" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 20px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="60.0750013078962" y="124.60000610351562" width="20.075001307896205" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 20px; height: 20px;">T</span></foreignObject><foreignObject style="overflow: visible;" x="80.1500026157924" y="124.60000610351562" width="20.07500130789621" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 20px; height: 20px;">W</span></foreignObject><foreignObject style="overflow: visible;" x="100.22500392368862" y="124.60000610351562" width="20.0750013078962" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 20px; height: 20px;">T</span></foreignObject><foreignObject style="overflow: visible;" x="120.30000523158482" y="124.60000610351562" width="20.0750013078962" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 20px; height: 20px;">F</span></foreignObject><foreignObject style="overflow: visible;" x="140.37500653948103" y="124.60000610351562" width="20.075001307896216" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 20px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" x="160.45000784737724" y="124.60000610351562" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" y="95.6800048828125" x="0" height="23.920001220703124" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="71.76000366210937" x="0" height="23.920001220703124" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">10</span></foreignObject><foreignObject style="overflow: visible;" y="47.84000244140625" x="0" height="23.92000122070312" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">20</span></foreignObject><foreignObject style="overflow: visible;" y="23.920001220703128" x="0" height="23.920001220703128" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">30</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="23.920001220703128" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">40</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">50</span></foreignObject></g></svg></div>
                                    </div>
                                    <div class="card-body">
                                      <h4 class="card-title">Daily Sales</h4>
                                      <p class="card-category">
                                        <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                                    </div>
                                    <div class="card-footer">
                                      <div class="stats">
                                        <i class="material-icons">access_time</i> updated 4 minutes ago
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="card card-chart">
                                    <div class="card-header card-header-warning">
                                      <div class="ct-chart" id="websiteViewsChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;"><g class="ct-grids"><line y1="119.60000610351562" y2="119.60000610351562" x1="40" x2="175.52500915527344" class="ct-grid ct-vertical"></line><line y1="95.6800048828125" y2="95.6800048828125" x1="40" x2="175.52500915527344" class="ct-grid ct-vertical"></line><line y1="71.76000366210937" y2="71.76000366210937" x1="40" x2="175.52500915527344" class="ct-grid ct-vertical"></line><line y1="47.840002441406256" y2="47.840002441406256" x1="40" x2="175.52500915527344" class="ct-grid ct-vertical"></line><line y1="23.920001220703128" y2="23.920001220703128" x1="40" x2="175.52500915527344" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="175.52500915527344" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><line x1="45.64687538146973" x2="45.64687538146973" y1="119.60000610351562" y2="54.77680279541016" class="ct-bar" ct:value="542" opacity="1"></line><line x1="56.94062614440918" x2="56.94062614440918" y1="119.60000610351562" y2="66.6172033996582" class="ct-bar" ct:value="443" opacity="1"></line><line x1="68.23437690734863" x2="68.23437690734863" y1="119.60000610351562" y2="81.32800415039063" class="ct-bar" ct:value="320" opacity="1"></line><line x1="79.52812767028809" x2="79.52812767028809" y1="119.60000610351562" y2="26.312001342773442" class="ct-bar" ct:value="780" opacity="1"></line><line x1="90.82187843322754" x2="90.82187843322754" y1="119.60000610351562" y2="53.46120272827149" class="ct-bar" ct:value="553" opacity="1"></line><line x1="102.11562919616699" x2="102.11562919616699" y1="119.60000610351562" y2="65.42120333862304" class="ct-bar" ct:value="453" opacity="1"></line><line x1="113.40937995910645" x2="113.40937995910645" y1="119.60000610351562" y2="80.61040411376953" class="ct-bar" ct:value="326" opacity="1"></line><line x1="124.7031307220459" x2="124.7031307220459" y1="119.60000610351562" y2="67.69360345458983" class="ct-bar" ct:value="434" opacity="1"></line><line x1="135.99688148498535" x2="135.99688148498535" y1="119.60000610351562" y2="51.667202636718756" class="ct-bar" ct:value="568" opacity="1"></line><line x1="147.2906322479248" x2="147.2906322479248" y1="119.60000610351562" y2="46.64400238037109" class="ct-bar" ct:value="610" opacity="1"></line><line x1="158.58438301086426" x2="158.58438301086426" y1="119.60000610351562" y2="29.182401489257813" class="ct-bar" ct:value="756" opacity="1"></line><line x1="169.8781337738037" x2="169.8781337738037" y1="119.60000610351562" y2="12.558000640869139" class="ct-bar" ct:value="895" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="124.60000610351562" width="11.293750762939453" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 11px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="51.29375076293945" y="124.60000610351562" width="11.293750762939453" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 11px; height: 20px;">F</span></foreignObject><foreignObject style="overflow: visible;" x="62.587501525878906" y="124.60000610351562" width="11.293750762939453" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 11px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="73.88125228881836" y="124.60000610351562" width="11.293750762939453" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 11px; height: 20px;">A</span></foreignObject><foreignObject style="overflow: visible;" x="85.17500305175781" y="124.60000610351562" width="11.293750762939453" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 11px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="96.46875381469727" y="124.60000610351562" width="11.293750762939453" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 11px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="107.76250457763672" y="124.60000610351562" width="11.293750762939453" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 11px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="119.05625534057617" y="124.60000610351562" width="11.293750762939453" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 11px; height: 20px;">A</span></foreignObject><foreignObject style="overflow: visible;" x="130.35000610351562" y="124.60000610351562" width="11.293750762939453" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 11px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" x="141.64375686645508" y="124.60000610351562" width="11.293750762939453" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 11px; height: 20px;">O</span></foreignObject><foreignObject style="overflow: visible;" x="152.93750762939453" y="124.60000610351562" width="11.293750762939453" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 11px; height: 20px;">N</span></foreignObject><foreignObject style="overflow: visible;" x="164.23125839233398" y="124.60000610351562" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">D</span></foreignObject><foreignObject style="overflow: visible;" y="95.6800048828125" x="0" height="23.920001220703124" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="71.76000366210937" x="0" height="23.920001220703124" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">200</span></foreignObject><foreignObject style="overflow: visible;" y="47.84000244140625" x="0" height="23.92000122070312" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">400</span></foreignObject><foreignObject style="overflow: visible;" y="23.920001220703128" x="0" height="23.920001220703128" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">600</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="23.920001220703128" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">800</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">1000</span></foreignObject></g></svg></div>
                                    </div>
                                    <div class="card-body">
                                      <h4 class="card-title">Email Subscriptions</h4>
                                      <p class="card-category">Last Campaign Performance</p>
                                    </div>
                                    <div class="card-footer">
                                      <div class="stats">
                                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="card card-chart">
                                    <div class="card-header card-header-danger">
                                      <div class="ct-chart" id="completedTasksChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="40" x2="40" y1="0" y2="119.60000610351562" class="ct-grid ct-horizontal"></line><line x1="57.56562614440918" x2="57.56562614440918" y1="0" y2="119.60000610351562" class="ct-grid ct-horizontal"></line><line x1="75.13125228881836" x2="75.13125228881836" y1="0" y2="119.60000610351562" class="ct-grid ct-horizontal"></line><line x1="92.69687843322754" x2="92.69687843322754" y1="0" y2="119.60000610351562" class="ct-grid ct-horizontal"></line><line x1="110.26250457763672" x2="110.26250457763672" y1="0" y2="119.60000610351562" class="ct-grid ct-horizontal"></line><line x1="127.8281307220459" x2="127.8281307220459" y1="0" y2="119.60000610351562" class="ct-grid ct-horizontal"></line><line x1="145.39375686645508" x2="145.39375686645508" y1="0" y2="119.60000610351562" class="ct-grid ct-horizontal"></line><line x1="162.95938301086426" x2="162.95938301086426" y1="0" y2="119.60000610351562" class="ct-grid ct-horizontal"></line><line y1="119.60000610351562" y2="119.60000610351562" x1="40" x2="180.52500915527344" class="ct-grid ct-vertical"></line><line y1="95.6800048828125" y2="95.6800048828125" x1="40" x2="180.52500915527344" class="ct-grid ct-vertical"></line><line y1="71.76000366210937" y2="71.76000366210937" x1="40" x2="180.52500915527344" class="ct-grid ct-vertical"></line><line y1="47.840002441406256" y2="47.840002441406256" x1="40" x2="180.52500915527344" class="ct-grid ct-vertical"></line><line y1="23.920001220703128" y2="23.920001220703128" x1="40" x2="180.52500915527344" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="180.52500915527344" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M 40 92.092 C 57.566 29.9 57.566 29.9 57.566 29.9 C 75.131 65.78 75.131 65.78 75.131 65.78 C 92.697 83.72 92.697 83.72 92.697 83.72 C 110.263 86.112 110.263 86.112 110.263 86.112 C 127.828 90.896 127.828 90.896 127.828 90.896 C 145.394 95.68 145.394 95.68 145.394 95.68 C 162.959 96.876 162.959 96.876 162.959 96.876" class="ct-line"></path><line x1="40" y1="92.09200469970703" x2="40.01" y2="92.09200469970703" class="ct-point" ct:value="230" opacity="1"></line><line x1="57.56562614440918" y1="29.900001525878906" x2="57.57562614440918" y2="29.900001525878906" class="ct-point" ct:value="750" opacity="1"></line><line x1="75.13125228881836" y1="65.78000335693359" x2="75.14125228881836" y2="65.78000335693359" class="ct-point" ct:value="450" opacity="1"></line><line x1="92.69687843322754" y1="83.72000427246094" x2="92.70687843322754" y2="83.72000427246094" class="ct-point" ct:value="300" opacity="1"></line><line x1="110.26250457763672" y1="86.11200439453125" x2="110.27250457763672" y2="86.11200439453125" class="ct-point" ct:value="280" opacity="1"></line><line x1="127.8281307220459" y1="90.89600463867188" x2="127.8381307220459" y2="90.89600463867188" class="ct-point" ct:value="240" opacity="1"></line><line x1="145.39375686645508" y1="95.6800048828125" x2="145.40375686645507" y2="95.6800048828125" class="ct-point" ct:value="200" opacity="1"></line><line x1="162.95938301086426" y1="96.87600494384766" x2="162.96938301086425" y2="96.87600494384766" class="ct-point" ct:value="190" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="124.60000610351562" width="17.56562614440918" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 18px; height: 20px;">12p</span></foreignObject><foreignObject style="overflow: visible;" x="57.56562614440918" y="124.60000610351562" width="17.56562614440918" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 18px; height: 20px;">3p</span></foreignObject><foreignObject style="overflow: visible;" x="75.13125228881836" y="124.60000610351562" width="17.56562614440918" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 18px; height: 20px;">6p</span></foreignObject><foreignObject style="overflow: visible;" x="92.69687843322754" y="124.60000610351562" width="17.56562614440918" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 18px; height: 20px;">9p</span></foreignObject><foreignObject style="overflow: visible;" x="110.26250457763672" y="124.60000610351562" width="17.56562614440918" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 18px; height: 20px;">12p</span></foreignObject><foreignObject style="overflow: visible;" x="127.8281307220459" y="124.60000610351562" width="17.56562614440918" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 18px; height: 20px;">3a</span></foreignObject><foreignObject style="overflow: visible;" x="145.39375686645508" y="124.60000610351562" width="17.56562614440918" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 18px; height: 20px;">6a</span></foreignObject><foreignObject style="overflow: visible;" x="162.95938301086426" y="124.60000610351562" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">9a</span></foreignObject><foreignObject style="overflow: visible;" y="95.6800048828125" x="0" height="23.920001220703124" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="71.76000366210937" x="0" height="23.920001220703124" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">200</span></foreignObject><foreignObject style="overflow: visible;" y="47.84000244140625" x="0" height="23.92000122070312" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">400</span></foreignObject><foreignObject style="overflow: visible;" y="23.920001220703128" x="0" height="23.920001220703128" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">600</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="23.920001220703128" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">800</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">1000</span></foreignObject></g></svg></div>
                                    </div>
                                    <div class="card-body">
                                      <h4 class="card-title">Completed Tasks</h4>
                                      <p class="card-category">Last Campaign Performance</p>
                                    </div>
                                    <div class="card-footer">
                                      <div class="stats">
                                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                            <div class="card">
                                              <div class="card-header card-header-primary">
                                                <h4 class="card-title">Employees Stats</h4>
                                                <p class="card-category">New employees on 15th September, 2016</p>
                                              </div>
                                              <div class="card-body table-responsive">
                                                <table class="table table-hover">
                                                  <thead class="text-primary">
                                                    <tr><th>ID</th>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Country</th>
                                                  </tr></thead>
                                                  <tbody>
          
                                                    <tr>
                                                      <td>1</td>
                                                      <td>Dakota Rice</td>
                                                      <td>$36,738</td>
                                                      <td>Niger</td>
                                                    </tr>
                                                    
                                                  </tbody>
                                                </table>
                                              </div>
                                            </div>
                                          </div>
                                <div class="col-lg-6 col-md-12">
                                  <div class="card">
                                    <div class="card-header card-header-warning">
                                      <h4 class="card-title">Employees Stats</h4>
                                      <p class="card-category">New employees on 15th September, 2016</p>
                                    </div>
                                    <div class="card-body table-responsive">
                                      <table class="table table-hover">
                                        <thead class="text-warning">
                                          <tr><th>ID</th>
                                          <th>Title</th>
                                          <th>Description</th>
                                          <th>Country</th>
                                        </tr></thead>
                                        <tbody>

                                          <tr>
                                            <td>1</td>
                                            <td>Dakota Rice</td>
                                            <td>$36,738</td>
                                            <td>Niger</td>
                                          </tr>
                                          
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tables', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newcrud\resources\views/home.blade.php ENDPATH**/ ?>