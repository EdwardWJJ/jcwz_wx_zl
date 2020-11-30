// pages/home/home.js
const app = getApp();
Page({

  /**
   * 页面的初始数据
   */
  data: {
    
  },
 
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    var that = this;
    wx.request({
      url: app.globalData.rootUrl + "/index/commodity",
      method: "POST",
      header: {
        "content-type": "application/x-www-form-urlencoded"
      },
      data: {
        // status_bit: 1
      },
      success: function (res) {
        console.log(res.data);
        that.setData({
          alcohol: res.data
        });
      }
    });

  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function () {

  },

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function () {

  },

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide: function () {

  },

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function () {

  },

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function () {

  },

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function () {

  },

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function () {

  },
  /**
   * 跳转详情页
   */
  todetailshop: function (e) {
    var that = this;
    var alcoholid = e.currentTarget.dataset.alcoholid;
    console.log('id:' + alcoholid);
    wx.navigateTo({ url: '../detail/detail?alcoholid=' + alcoholid })


  },
  /**
   * 跳转列表页
   */
  todetail: function (e) {
    var idd = e.currentTarget.id;
    wx.navigateTo({
      url: '../shoplist/shoplist?type=' + idd
    })
  }
})