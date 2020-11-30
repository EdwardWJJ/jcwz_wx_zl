// pages/setting/set.js
const app = getApp();
Page({

  /**
   * 页面的初始数据
   */
  data: {
    switch1Checked:true,
  },
  changetap :function(e){
    console.log(e.detail.value)

  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    var that = this;
    wx.request({
      url: app.globalData.rootUrl + "/index/address",
      method: "POST",
      header: {
        "content-type": "application/x-www-form-urlencoded"
      },
      data: {
        // status_bit: 3
      },
      success: function (res) {
        console.log(res.data);
        that.setData({
          list: res.data[0]
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
   * 跳转到编辑收货地址页
   */
  updateadrs: function () {
    wx.navigateTo({
      url: '../updateadrs/udateadrs'
    })
  },
  
})