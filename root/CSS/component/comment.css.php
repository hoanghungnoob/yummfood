<style>
.container-fluid>h2{
        color: var(--Neutral-07, #2C2F24);
        text-align: center;
        /* Headline/H2 */
        font-family: Playfair Display;
        font-size: 55px;
        font-style: normal;
        font-weight: 500;
        line-height: 60.5px; /* 110% */
    }
.comment-container {
  display: inline-block;
  margin-right: 25px;
  
}

.comment {
  display: flex;
  flex-direction: column;
  align-items:flex-start;
  gap: 20px;
  width: 416px;
  height: 408px;
  border-radius: 12px;
  background: #F9F9F7;
  padding: 20px;
  position:relative;

}
.hr-comment{
  width: 90%;
  height: 1px;
  opacity: 0.7;
  background: #DBDFD0;
  position:absolute;
  top:270px;
}
.profile-comment{
  display: flex;
  align-items: center;
  gap: 20px;
  position:absolute;
  top:300px;
}
.profile img {
  width: 70px;
  height: 70px;
  border-radius: 70px;
  background: url(<path-to-image>), lightgray 50% / cover no-repeat;
}

.user-address {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 3px;
}

.user-comment {
  color: var(--Neutral-07, #2C2F24);
  /* Body/16px/Bold */
  font-family: DM Sans;
  font-size: 16px;
  font-style: normal;
  font-weight: 700;
  line-height: 24px; /* 150% */
}

.address-comment {
  color: var(--Neutral-06, #414536);
  /* Body/16px/Regular */
  font-family: DM Sans;
  font-size: 16px;
  font-style: normal;
  font-weight: 400;
  line-height: 24px; /* 150% */
}

.title-comment {
  color: #AD343E;
  /* Headline/H3 */
  font-family: DM Sans;
  font-size: 24px;
  font-style: normal;
  font-weight: 700;
  line-height: 30px; /* 125% */
  letter-spacing: -0.72px;
}

.content-comment {
  width: 346px;
  color: var(--Neutral-06, #414536);
  /* Body/18px/Regular */
  font-family: DM Sans;
  font-size: 18px;
  font-style: normal;
  font-weight: 400;
  line-height: 28px; /* 155.556% */
}
</style>