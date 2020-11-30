// pages/my/index.js
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
      url: app.globalData.rootUrl + "/index/index",
      method: "POST",
      header: {
        "content-type": "application/x-www-form-urlencoded"
      },
      data: {
        // id: 4
      },
      success: function (res) {
        console.log(res.data);
        that.setData({
          list: res.data[15]
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
   * 跳转到收货地址管理页
   */
  address: function () {
    wx.navigateTo({
      url: '../addressdetails/index'
    })
  },
    /**
   * 跳转到设置页
   */
  setting: function () {
    wx.navigateTo({
      url: '../setting/set'
    })
  },

  orderdfk: function () {
    wx.navigateTo({
      url: '../orderdfk/index'
    })
  },

  orderdsh: function () {
    wx.navigateTo({
      url: '../orderdsh/index'
    })
  },
  
  orderysh: function () {
    wx.navigateTo({
      url: '../orderysh/index'
    })
  },

  orderyqs: function () {
    wx.navigateTo({
      url: '../orderyqx/index'
    })
  },
  
})